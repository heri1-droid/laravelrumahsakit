<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        return view("home.admin.layanan.index", [
            'layanans' => Pelayanan::orderBy('id', 'desc')->paginate(4)
        ]);
    }
    public function create()
    {
        return view("home.admin.layanan.create");
    }
    public function store(Request $request)
    {
        $rules = [
            'layanan' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'layanan.required' => 'Nama Layanan wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);


        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/layanan', $fileName);

        # Artikel
        $storage = "storage/content-layanan";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Pelayanan::create([
            'layanan' => $request->layanan,
            'slug' => Str::slug($request->layanan, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('layanan'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $layanan = Pelayanan::find($id);
        return view('home.admin.layanan.edit', [
            'layanan' => $layanan
        ]);
    }
    public function update(Request $request, $id)
    {

        $layanan = Pelayanan::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'layanan' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'layanan.required' => 'Layanan wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/layanan/' . $layanan->image)) {
                \File::delete('storage/layanan/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/layanan', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-layanan";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $layanan->update([
            'layanan' => $request->layanan,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('layanan'))->with('success', 'data berhasil di update');
    }
    public function destroy($id)
    {
        $layanan = Pelayanan::find($id);
        if (\File::exists('storage/layanan/ {$layanan->image}')) {
            \File::delete('storage/layanan/ {$layanan->image}');
        }

        $layanan->delete();

        return redirect(route('layanan'))->with('success', 'data berhasil di hapus');
    }

    //======================================================================================================================================================================================================================
    //================================BATAS==========================================================================================================================================================================
    //======================================================================================================================================================================================================================


    public function getLayanan()
    {
        $response['data'] = Pelayanan::all();
        $response['message'] = 'List data fakultas';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storeLayanan(Request $request)
    {
        // Validation rules
        $rules = [
            'layanan' => 'required|unique:pelayanans',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $this->validate($request, $rules);


        // Handle Image Upload
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/layanan', $fileName);

        // Process Description with Images
        $storage = "storage/content-layanan";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = "$storage/$fileNameContentRand.$mimetype";

                Image::make($src)
                    ->resize(1440, 720)
                    ->encode($mimetype, 100)
                    ->save(public_path($filePath));

                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        // Create Pelayanan
        $hasil = Pelayanan::create([
            'layanan' => $request->layanan,
            'slug' => Str::slug($request->layanan, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        if ($hasil) {
            return response()->json([
                'success' => true,
                'message' => $request->layanan . " berhasil disimpan"
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => $request->layanan . " gagal disimpan"
            ], 400);
        }
    }


    public function updateLayanan(Request $request, $id)
    {

        $layanan = Pelayanan::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'layanan' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];


        $this->validate($request, $rules);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/layanan/' . $layanan->image)) {
                \File::delete('storage/layanan/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/layanan', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-layanan";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $hasil = $layanan->update([
            'layanan' => $request->layanan,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        if ($hasil) { // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "Berhasil diubah Menjadi Layanan {$request->layanan}";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->layanan . " gagal diubah";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function destroyLayanan($id)
    {
        $layanan = Pelayanan::find($id);

        if (!$layanan) {
            return response()->json([
                'success' => false,
                'message' => 'Layanan tidak ditemukan',
            ], 404); // 404 Not Found
        }

        // Cek dan hapus file jika ada
        $filePath = "storage/layanan/{$layanan->image}";
        if (\File::exists($filePath)) {
            \File::delete($filePath);
        }

        // Hapus data layanan dari database
        $hasil = $layanan->delete();

        if ($hasil) {
            return response()->json([
                'success' => true,
                'message' => "Layanan berhasil dihapus",
            ], 200); // 200 OK
        } else {
            return response()->json([
                'success' => false,
                'message' => "Gagal menghapus layanan",
            ], 500); // 500 Internal Server Error
        }
    }
}

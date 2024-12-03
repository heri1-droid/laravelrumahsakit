<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;



use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class BeritaController extends Controller
{
    public function index()
    {
        return view("home.admin.berita.index", [
            'artikels' => Berita::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    public function cari(Request $request)
    {
        return view("home.admin.berita.index", [
            'artikels' => Berita::where('judul', 'like', '%' . $request->cari . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(3),
        ]);
    }


    public function create()
    {
        return view("home.admin.berita.create");
    }
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);


        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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


        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),

        ]);

        return redirect()->route('berita')->with('success', $request->judul . ' berhasil disimpan');
    }
    public function edit($id)
    {
        $artikel = Berita::find($id);
        return view('home.admin.berita.edit', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, $id)
    {
        $artikel = Berita::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'image wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/{ $artikel->image}')) {
                \File::delete('storage/artikel/{ $request->old_image}');
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // Artikel
        $storage = "storage/content-artikel";
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

        $artikel->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('berita'))->with('success', 'berita berhasil di update');
    }
    public function destroy($id)
    {
        $artikel = Berita::find($id);
        if (\File::exists('storage/artikel/ {$artikel->image}')) {
            \File::delete('storage/artikel/ {$artikel->image}');
        }
        // {{ asset("/storage/artikel/{$artikel->image}") }}

        $artikel->delete();

        return redirect(route('berita'))->with('success', 'berita berhasil di hapus');
    }

    //======================================================================================================================================================================================================================
    //======================================================================================================================================================================================================================
    //======================================================================================================================================================================================================================
    //======================================================================================================================================================================================================================
    //======================================================================================================================================================================================================================
    //======================================================================================================================================================================================================================


    public function getBerita()
    {
        $response['data'] = Berita::all();
        $response['message'] = 'List data Berita';
        $response['success'] = true;

        return response()->json($response, 200);
    }



    public function updateBerita(Request $request, $id)
    {
        // Validasi
        $berita = Berita::findOrFail($id);
        $rules = [
            'judul' => 'required|unique:beritas,judul,' . $id,
            'image' => 'required|max:2048|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $this->validate($request, $rules);

        try {
            // Handle Featured Image jika ada image baru
            if ($request->hasFile('image')) {
                // Hapus image lama
                if (Storage::exists('public/artikel/' . $berita->image)) {
                    Storage::delete('public/artikel/' . $berita->image);
                }
                // Upload image baru
                $fileName = time() . '.' . $request->image->extension();
                $request->file('image')->storeAs('public/artikel', $fileName);
            } else {
                $fileName = $berita->image;
            }

            // Process Content Images
            $storage = "storage/content-artikel";
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

                    // Menggunakan Image Intervention untuk resize
                    $image = Image::make($src)
                        ->resize(1440, 720)
                        ->encode($mimetype, 100)
                        ->save(public_path($filePath));

                    $new_src = asset($filePath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-responsive');
                }
            }

            // Update Berita
            $hasil = $berita->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $fileName,
                'desc' => $dom->saveHTML(),
            ]);

            // Response
            if ($hasil) {
                $response['success'] = true;
                $response['message'] = "Berita berhasil diperbarui";
                return response()->json($response, 200);
            }
        } catch (\Exception $e) {
            $response['success'] = false;
            $response['message'] = "Error: " . $e->getMessage();
            return response()->json($response, 400);
        }
    }


    public function storeBerita(Request $request)
    {
        $rules = [
            'judul' => 'required|unique:beritas',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required',
        ];


        $this->validate($request, $rules);


        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        # Artikel
        $storage = "storage/content-artikel";
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
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));

                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }


        $hasil = Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),

        ]);

        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = " Berita {$request->judul} berhasil ditambah";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama." gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }

    }

    public function destroyBerita($id)
    {

        $artikel = Berita::findOrFail($id);

        // Perbaikan path file dan penggunaan string interpolation
        $imagePath = 'storage/artikel/' . $artikel->image;

        if (\File::exists($imagePath)) {
            \File::delete($imagePath);
        }

        $hasil = $artikel->delete();

        if ($hasil) {
            return response()->json([
                'success' => true,
                'message' => 'Artikel berhasil dihapus'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Gagal menghapus artikel'
        ], 400);
    }
}

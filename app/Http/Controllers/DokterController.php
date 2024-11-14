<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    public function index()
    {
        
        return view("home.admin.dokter.index", [
            'doctors' => Doctor::orderBy('created_at', 'desc')->paginate(3),
        ]);
    }

    public function pencarian(Request $request)
    {
        $query = Doctor::query();

        if ($request->filled('nama')) {
            $query->where('nama', 'like', '%' . $request->nama . '%');
        }

        if ($request->filled('spesialis')) {
            $query->where('spesialis', $request->spesialis);
        }

        // Paginate the results
        $doctors = $query->paginate(8);

        // Return the view with the paginated results
        return view("home.dokterrs.cari-dokter", [
            'doctors' => $doctors,
        ]);
    }


    public function cari(Request $request)
    {
        return view("home.admin.dokter.index", [
            'doctors' => Doctor::where('nama', 'like', '%' . $request->cari . '%')
                ->orWhere('spesialis', 'like', '%' . $request->cari . '%')
                ->orderBy('created_at', 'desc') // Tambahkan orderBy untuk mengurutkan berdasarkan created_at
                ->paginate(3),
        ]);
    }


    public function create()
    {
        return view("home.admin.dokter.create");
    }

    public function store(Request $request)
    {
        // Validation rules and messages
        $rules = [
            'nama' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'nullable|string',
            'schedules' => 'array',
            'schedules.*.start_time' => 'nullable|date_format:H:i',
            'schedules.*.end_time' => 'nullable|date_format:H:i',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'spesialis.required' => 'Spesialis wajib diisi!',
            'foto.image' => 'File foto harus berupa gambar!',
            'desc.string' => 'Deskripsi harus berupa teks!',
        ];

        $request->validate($rules, $messages);

        // Image handling
        $fileName = null;
        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->file('foto')->storeAs('public/doctor', $fileName);
        }

        // Description processing with embedded images
        $storage = "storage/doctor";
        $dom = new \DOMDocument();

        // Enable user error handling
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors(); // Clear libxml errors

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

        // Save doctor data
        $doctor = Doctor::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'desc' => $dom->saveHTML(),
            'foto' => $fileName,
        ]);

        // Save doctor schedules
        foreach ($request->schedules as $day => $times) {
            if (!empty($times['start_time']) && !empty($times['end_time'])) {
                DoctorSchedule::create([
                    'doctor_id' => $doctor->id,
                    'day' => $day,
                    'start_time' => $times['start_time'],
                    'end_time' => $times['end_time'],
                ]);
            }
        }

        return redirect()->route('dokter')->with('success', 'Dokter berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        $schedules = DoctorSchedule::where('doctor_id', $id)->get();

        return view('home.admin.dokter.edit', compact('doctor', 'schedules'));
    }




    public function update(Request $request, $id)
    {
        // Validation rules and messages
        $rules = [
            'nama' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'nullable|string',
            'schedules' => 'array',
            'schedules.*.start_time' => 'nullable|date_format:H:i',
            'schedules.*.end_time' => 'nullable|date_format:H:i',
        ];

        $messages = [
            'nama.required' => 'Nama wajib diisi!',
            'spesialis.required' => 'Spesialis wajib diisi!',
            'foto.image' => 'File foto harus berupa gambar!',
            'desc.string' => 'Deskripsi harus berupa teks!',
        ];

        $request->validate($rules, $messages);

        // Find the doctor to update
        $doctor = Doctor::findOrFail($id);

        // Image handling
        $fileName = $doctor->foto; // Preserve existing file name if no new photo is uploaded
        if ($request->hasFile('foto')) {
            // Delete old file
            if ($fileName && \Storage::exists("public/doctor/$fileName")) {
                \Storage::delete("public/doctor/$fileName");
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->file('foto')->storeAs('public/doctor', $fileName);
        }

        // Description processing with embedded images
        $storage = "storage/doctor";
        $dom = new \DOMDocument();

        // Enable user error handling
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors(); // Clear libxml errors

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

        // Update doctor data
        $doctor->update([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'desc' => $dom->saveHTML(),
            'foto' => $fileName,
        ]);

        // Delete existing schedules
        DoctorSchedule::where('doctor_id', $doctor->id)->delete();

        // Save updated schedules
        foreach ($request->schedules as $day => $times) {
            if (!empty($times['start_time']) && !empty($times['end_time'])) {
                DoctorSchedule::create([
                    'doctor_id' => $doctor->id,
                    'day' => $day,
                    'start_time' => $times['start_time'],
                    'end_time' => $times['end_time'],
                ]);
            }
        }

        return redirect()->route('dokter')->with('success', 'Dokter berhasil diperbarui!');
    }



    public function destroy($id)
    {
        // Temukan dokter berdasarkan ID
        $doctor = Doctor::findOrFail($id);

        // Hapus foto jika ada
        if ($doctor->foto && \Storage::exists("public/doctor/{$doctor->foto}")) {
            \Storage::delete("public/doctor/{$doctor->foto}");
        }

        // Hapus jadwal dokter
        DoctorSchedule::where('doctor_id', $doctor->id)->delete();

        // Hapus dokter
        $doctor->delete();

        return redirect()->route('dokter')->with('success', 'Dokter berhasil dihapus!');
    }

   
}

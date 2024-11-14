<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class AppsController extends Controller
{


    // public function layanan()
    // {
    //     $data = [
    //         'content' => 'home/layanan/layanan',
    //         'layanans' => Pelayanan::orderBy('id', 'desc')->get()
    //     ];

    //     return view('home.layouts.wrapper', $data);
    // }

    public function layanan()
    {
        $data = [
            'content' => 'home/layananrs/layanan',
            'layanans' => Pelayanan::orderBy('id', 'desc')->get()
        ];

        return view('home.layouts.wrapper', $data);
    }


    public function penawaran($slug)
    {
        $layanan = Pelayanan::where('slug', $slug)->first(); // Mengambil satu artikel berdasarkan slug

        $data = [
            'content' => 'home/layananrs/penawaran',
            'layanan' => $layanan // Menggunakan nama yang sama untuk variabel
        ];

        return view('home.layouts.wrapper', $data);
    }
}

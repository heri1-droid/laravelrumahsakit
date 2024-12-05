<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class AppController extends Controller
{

    public function index()
    {
        $data = [
            'content' => 'home/home/index',
            'artikels' => Berita::orderBy('created_at', 'desc')->limit(3)->get()
        ];

        return view('home.layouts.wrapper', $data);
    }

    public function berita()
    {
        $data = [
            'content' => 'home/blog/berita',
            'artikels' => Berita::orderBy('created_at', 'desc')->paginate(6)
        ];

        return view('home.layouts.wrapper', $data);
    }

    public function detail($slug)
    {
        $artikel = Berita::where('slug', $slug)->first(); // Mengambil satu artikel berdasarkan slug

        $data = [
            'content' => 'home/blog/detail',
            'artikel' => $artikel // Menggunakan nama yang sama untuk variabel
        ];

        return view('home.layouts.wrapper', $data);
    }

   

}

<?php

namespace App\Http\Controllers;

use App\Models\Pesan;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KontakController extends Controller
{


    function index()
    {
        $data = [
            'content' => 'home/kontak/index'
        ];
        return view('home.layouts.wrapper', $data);
    }


    function store(Request $request)
    {

        $this->validate($request, [
            'rate' => 'required',
            'ulasan' => 'required',
            'nama' => 'required',
            'no' => 'required',
        ]);

        Pesan::create([
            'rate' => $request->rate,
            'ulasan' => $request->ulasan,
            'nama' => $request->nama,
            'no' => $request->no, 
        ]);
        

        return redirect('/kontak')->with('success', 'Rating Anda telah berhasil dikirim!');
    }
}

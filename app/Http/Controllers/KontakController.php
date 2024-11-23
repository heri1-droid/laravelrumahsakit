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

    public function getPesan(){
        $response['data'] = Pesan::all();
        $response['message'] = 'List data Pesan';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storePesan(Request $request){
        // validasi input
        $input = $request->validate([
            "rate"      => "required|unique:pesan",
            "ulasan"     => "required",
            "nama" => "required",
            "no" => "required|unique:pesan"
        ]);

        // simpan
        $hasil = Pesan::create($input);
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "Terimkasih telah memberikan rating {$request->rate}";
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = "Rating gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function updatePesan(Request $request, $id)
    {
        $pesan = Pesan::find($id);
       
        // validasi input
        $input = $request->validate([
            "rate"      => "required",
            "ulasan"     => "required",
            "nama" => "required",
            "no" => "required"
        ]);

        // update data
        $hasil = $pesan->update($input);

        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "Pesan berhasil diupdate";
            return response()->json($response, 200);
        } else {
            $response['success'] = false;
            $response['message'] = "Pesan gagal diubah";
            return response()->json($response, 400);
        }
    }

    public function destroyPesan($id)
    {
        // cari data di tabel fakultas berdasarkan "id" fakultas
        $pesan = Pesan::find($id);
        // dd($fakultas);
        $hasil = $pesan->delete();
        if($hasil){ // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] = "Pesan berhasil dihapus";
            return response()->json($response, 200);
        } else {
            $response['success'] = false;
            $response['message'] = "Pesan gagal dihapus";
            return response()->json($response, 400);
        }
    }
}

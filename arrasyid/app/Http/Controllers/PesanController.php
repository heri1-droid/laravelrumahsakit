<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;




class PesanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Pesan',
            'pesan' => Pesan::orderBy('created_at', 'desc')->paginate(5), 
            'content' => 'admin/pesan/index',
        ];

        return view("home.admin.pesan.index", $data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Manajemen Pesan',
            'pesan' => Pesan::find($id),
            'content' => 'admin/pesan/show',
        ];

        return view("home.admin.pesan.index", $data);
    }

    public function destroy($id)
    {
        $item = Pesan::find($id);
      
        $item->delete();

        return redirect(route('pesan'))->with('success', 'Pesan berhasil di hapus');
    }

}

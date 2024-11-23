<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedulector;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class AppssController extends Controller
{
    public function dokterrs()
    {
        $data = [
            'content' => 'home/dokterrs/index',
            'doctors' => Doctor::orderBy('created_at', 'desc')->paginate(8)
        ];

        return view('home.layouts.wrapper', $data);
    }


    
}

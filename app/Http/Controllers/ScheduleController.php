<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedulector;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class ScheduleController extends Controller
{
    // public function index()
    // {
    //     $doctors = Doctor::with('schedules')->paginate(8);
    //     return view('home.dokterrs.index', compact('doctors'));
    // }
    // public function index()
    // {
    //     // Mengambil data dokter dengan pagination
    //     $doctors = Doctor::orderBy('created_at', 'desc')->paginate(8);

    //     // Mengembalikan view dengan data dokter
    //     return view('home.dokterrs.index', [
    //         'doctors' => $doctors,
    //     ]);
    // }
}

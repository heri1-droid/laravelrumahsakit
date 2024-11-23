<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class ScheduleController extends Controller
{
    

    public function getJadwal()
    {
        $response['data'] = DoctorSchedule::all();
        $response['message'] = 'List Jadwal Dokter';
        $response['success'] = true;

        return response()->json($response, 200);
    }

    public function storeJadwal(Request $request)
    {
        // validasi input
        $input = $request->validate([
            "day"          => "required|",
            "start_time"       => "required",
            "end_time"     => "required",
            "doctor_id"   => "required"
        ]);

        // simpan
        $hasil = DoctorSchedule::create($input);
        if ($hasil) { // jika data berhasil disimpan
            $response['success'] = true;
            // $response['message'] = $request->"jadwal"day." berhasil disimpan";
            $response['message'] =  "Jadwal " . $request->day . " berhasil disimpan";

            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->day . " gagal disimpan";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function updateJadwal(Request $request, $id)
    {
        $jadwal = DoctorSchedule::find($id);
        //dd($fakultas);

        $input = $request->validate([
            "day"          => "required",
            "start_time"       => "required",
            "end_time"     => "required",
            "doctor_id"   => "required"
        ]);


        $hasil = $jadwal->update($input);

        if ($hasil) { // jika data berhasil disimpan
            $response['success'] = true;
            $response['message'] =  "Jadwal diganti menjadi hari " . $request->day;
            return response()->json($response, 201); // 201 Created
        } else {
            $response['success'] = false;
            $response['message'] = $request->nama . " gagal diubah";
            return response()->json($response, 400); // 400 Bad Request
        }
    }

    public function destroyJadwal($id)
    {

        // Cari jadwal berdasarkan ID
        $jadwal = DoctorSchedule::find($id);

        if (!$jadwal) {
            return response()->json([
                'success' => false,
                'message' => 'Jadwal tidak ditemukan'
            ], 404); // 404 Not Found
        }

        // Simpan hari sebelum dihapus untuk pesan response
        $day = $jadwal->day;

        // Hapus jadwal
        $hasil = $jadwal->delete();

        if ($hasil) {
            return response()->json([
                'success' => true,
                'message' => "Jadwal " . $day . " berhasil dihapus"
            ], 200); // 200 OK
        } else {
            return response()->json([
                'success' => false,
                'message' => "Jadwal " . $day . " gagal dihapus"
            ], 400); // 400 Bad Request
        }
    }
}

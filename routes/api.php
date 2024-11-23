<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ScheduleController;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);

Route::get('berita', [BeritaController::class, 'getBerita'])->middleware(['auth:sanctum', 'ability:read']);
Route::post('berita', [BeritaController::class, 'storeBerita'])->middleware(['auth:sanctum', 'ability:create']);
Route::put('berita/{id}', [BeritaController::class, 'updateBerita'])->middleware(['auth:sanctum', 'ability:update']);
Route::delete('berita/{id}', [BeritaController::class, 'destroyBerita'])->middleware(['auth:sanctum', 'ability:delete']);

Route::get('dokter', [DokterController::class, 'getDokter'])->middleware(['auth:sanctum', 'ability:read']);
Route::post('dokter', [DokterController::class, 'storeDokter'])->middleware(['auth:sanctum', 'ability:create']);
Route::put('dokter/{id}', [DokterController::class, 'updateDokter'])->middleware(['auth:sanctum', 'ability:update']);
Route::delete('dokter/{id}', [DokterController::class, 'destroyDokter'])->middleware(['auth:sanctum', 'ability:delete']);

Route::get('jadwaldokter', [ScheduleController::class, 'getJadwal'])->middleware(['auth:sanctum', 'ability:read']);
Route::post('jadwaldokter', [ScheduleController::class, 'storeJadwal'])->middleware(['auth:sanctum', 'ability:create']);
Route::put('jadwaldokter/{id}', [ScheduleController::class, 'updateJadwal'])->middleware(['auth:sanctum', 'ability:update']);
Route::delete('jadwaldokter/{id}', [ScheduleController::class, 'destroyJadwal'])->middleware(['auth:sanctum', 'ability:delete']);

Route::get('layanan', [LayananController::class, 'getLayanan'])->middleware(['auth:sanctum', 'ability:read']);
Route::post('layanan', [LayananController::class, 'storeLayanan'])->middleware(['auth:sanctum', 'ability:create']);
Route::put('layanan/{id}', [LayananController::class, 'updateLayanan'])->middleware(['auth:sanctum', 'ability:update']);
Route::delete('layanan/{id}', [LayananController::class, 'destroyLayanan'])->middleware(['auth:sanctum', 'ability:delete']);

Route::get('pesan', [KontakController::class, 'getPesan'])->middleware(['auth:sanctum', 'ability:read']);
Route::post('pesan', [KontakController::class, 'storePesan'])->middleware(['auth:sanctum', 'ability:create']);
Route::put('pesan/{id}', [KontakController::class, 'updatePesan'])->middleware(['auth:sanctum', 'ability:update']);
Route::delete('pesan/{id}', [KontakController::class, 'destroyPesan'])->middleware(['auth:sanctum', 'ability:delete']);

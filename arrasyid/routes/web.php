<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\AppssController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ScheduleController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/", [AppController::class,"index"]);
Route::get("/blog", [AppController::class,"berita"]);
Route::get("/detail/{slug}", [AppController::class,"detail"]);

Route::get('/layananrs', [AppsController::class, 'layanan']);
Route::get('/penawaran/{slug}', [AppsController::class, 'penawaran']);

Route::get('/dokterrs', [AppssController::class, 'dokterrs']);





// Route::get('/', function () {
//     $data = [
//         'content' => 'home/home/index'
//     ];
//     return view('home.layouts.wrapper', $data);
// });

// Route::get('/home', function () {
//     $data = [
//         'content' => 'home/home/index'
//     ];
//     return view('home.layouts.wrapper', $data);
// });

Route::get('/profil', function () {
    $data = [
        'content' => 'home/profil/index'
    ];
    return view('home.layouts.wrapper', $data);
}); 


// Route::get('/dokter', function () {
//     $data = [
//         'content' => 'home/dokter/index'
//     ];
//     return view('home.layouts.wrapper', $data);
// });






Route::get('/blog/detail', function () {
    $data = [
        'content' => 'home/blog/detail'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/auth', function () {
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});




// Route::get('/home/layanan/mcu', function () {
//     return view('home.layanan.mcu');
// })->name('layanan.mcu');

Route::resource('/Pesan', PesanController::class);

Route::get('/kontak', [KontakController::class,'index']);
Route::post('/kontak', [KontakController::class,'store']);
Route::get('/cari-dokter', [DokterController::class,'pencarian']);


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita')->middleware('auth');
Route::get('/berita-cari', [BeritaController::class, 'cari'])->name('berita-cari')->middleware('auth');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::post('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::post('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('auth');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan')->middleware('auth');
//Route::get('/layanan-cari', [LayananController::class, 'cari'])->name('layanan-cari')->middleware('auth');
Route::get('/layanan/create', [LayananController::class, 'create'])->name('layanan.create')->middleware('auth');
Route::post('/layanan/store', [LayananController::class, 'store'])->name('layanan.store')->middleware('auth');
Route::get('/layanan/edit/{id}', [LayananController::class, 'edit'])->name('layanan.edit')->middleware('auth');
Route::post('/layanan/update/{id}', [LayananController::class, 'update'])->name('layanan.update')->middleware('auth');
Route::post('/layanan/destroy/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy')->middleware('auth');


Route::get('/dokter', [DokterController::class, 'index'])->name('dokter')->middleware('auth');
Route::get('/dokter-cari', [DokterController::class, 'cari'])->name('dokter-cari')->middleware('auth');
Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokter.create')->middleware('auth');
Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokter.store')->middleware('auth');
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit'])->name('dokter.edit')->middleware('auth');
Route::post('/dokter/update/{id}', [DokterController::class, 'update'])->name('dokter.update')->middleware('auth');
Route::post('/dokter/destroy/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy')->middleware('auth');



Route::get('/dokter', [DokterController::class, 'index'])->name('dokter')->middleware('auth');
Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokter.create')->middleware('auth');
Route::get('/dokter/store', [DokterController::class, 'store'])->name('dokter.store')->middleware('auth');

Route::get('/pesan', [PesanController::class, 'index'])->name('pesan')->middleware('auth');
Route::delete('/pesan/destroy/{id}', [PesanController::class, 'destroy'])->name('pesan.destroy')->middleware('auth');








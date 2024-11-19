<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
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

Route::get('berita', [BeritaController::class, 'getBerita']);
Route::post('berita', [BeritaController::class, 'storeBerita'])->middleware(['auth:sanctum']);





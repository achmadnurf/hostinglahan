<?php

use App\Http\Controllers\LahanController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\LaporanKontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class,
    'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resources([
        'posisi' => PosisiController::class,
        'lahan' => LahanController::class,
    ], [
        'parameters' => [
            'lahan' => 'lahan'
        ]
    ]);
    Route::get('posisi-validasi', [BendaharaController::class, 'index'])->name('validasi.index');
    Route::get('posisi-authorisasi', [BendaharaController::class, 'authorisasiIndex'])->name('authorisasi.index');
    Route::get('posisi-authorisasi/{posisi}', [BendaharaController::class, 'authorizePosisi'])->name('authorisasi.authorize');
    Route::get('posisi-validasi/{posisi}', [BendaharaController::class, 'validasi'])->name('validasi');
    Route::put('posisi-validasi/{posisi}', [BendaharaController::class, 'store'])->name('validate');
    Route::get('laporan/posisi', [LaporanKontroller::class, 'kridit'])->name('laporan.posisi');
    Route::get('laporan/jurnal/bendahara', [LaporanKontroller::class, 'jurnalBendahara'])->name('laporan.jurnal-bendahara');
    Route::get('slip/pencairan', [BendaharaController::class, 'slipPencairanIndex'])->name('slip.index');
    Route::get('slip/{posisi}', [BendaharaController::class, 'cetakSlip'])->name('slip.cetak');

});
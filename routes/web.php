<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

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

Route::group(['prefix' => '/'], function(){
    Route::get('/', [ClientController::class, 'index'])->name('/');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/pendaftaran'], function($id = null){
    Route::get('daftar_admin', [AdminController::class, 'daftar_admin'])->name('daftar_admin');
    Route::post('daftar_admin/kirim_data', [AdminController::class, 'kirim_data'])->name('kirim_data');

    Route::get('pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::get('pendaftar/{id}/lihat', [AdminController::class, 'lihat'])->name('lihat', $id);
    Route::get('pendaftar/{id}/hapus_siswa', [AdminController::class, 'hapus_siswa'])->name('hapus_siswa', $id);
    Route::get('pendaftar/{id}/acc', [AdminController::class, 'acc'])->name('acc', $id);
    Route::get('pendaftar/{id}/daful', [AdminController::class, 'daful'])->name('daful', $id);
    Route::post('pendaftar/acc_massal', [AdminController::class, 'acc_massal'])->name('acc_massal');

});

Route::group(['prefix' => 'home/sekolah'], function($id = null){
    Route::post('/add_jurusan', [AdminController::class, 'add_jurusan'])->name('add_jurusan');
    Route::post('/add_gelombang', [AdminController::class, 'add_gelombang'])->name('add_gelombang');
});
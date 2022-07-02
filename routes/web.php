<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/pendaftaran'], function($id = null){
    Route::get('daftar_admin', [AdminController::class, 'daftar_admin'])->name('daftar_admin');
    Route::get('cari_smp', [AdminController::class, 'cari_smp'])->name('cari_smp');
});

Route::group(['prefix' => 'home/sekolah'], function($id = null){
    Route::post('/add_jurusan', [AdminController::class, 'add_jurusan'])->name('add_jurusan');
    Route::post('/add_gelombang', [AdminController::class, 'add_gelombang'])->name('add_gelombang');
    Route::get('/sekolah_smp', [AdminController::class, 'sekolah_smp'])->name('sekolah_smp');

    Route::post('/sekolah_smp/upload_smp', [AdminController::class, 'upload_smp'])->name('upload_smp');
    Route::get('/sekolah_smp/{id}/hapus_smp', [AdminController::class, 'hapus_smp'])->name('hapus_smp', $id);
    Route::get('/sekolah_smp/reset_smp', [AdminController::class, 'reset_smp'])->name('reset_smp');
});
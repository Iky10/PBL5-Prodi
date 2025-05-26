<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OutputLulusanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;
use App\Http\Controllers\Admin\AdminOutputLulusanController;
use App\Http\Controllers\Admin\DosenController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class, 'index']);
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('berita-detail');
Route::get('/berita-lainnya', [IndexController::class, 'beritaLainnya'])->name('berita-lainnya');

Route::get('/output-lulusan/{id}', [IndexController::class, 'outputLulusanDetail'])->name('output-lulusan-detail');
Route::get('/output-lulusan',[OutputLulusanController::class, 'index'])->name('output-lulusan.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/alasan', [AlasanController::class, 'index'])->name('alasan.index');
Route::get('/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
Route::post('/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
Route::get('/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
Route::put('/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
Route::delete('/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

Route::get('/admin/alasan-banner', [AlasanBannerController::class, 'index'])->name('admin.alasan-banner.index');
Route::get('/admin/alasan-banner/edit/{id}', [AlasanBannerController::class, 'edit'])->name('admin.alasan-banner.edit');
Route::put('/admin/alasan-banner/update/{id}', [AlasanBannerController::class, 'update'])->name('admin.alasan-banner.update');

Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

Route::get('/admin/output-lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output-lulusan.index');
Route::get('/admin/output-lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output-lulusan.create');
Route::post('/admin/output-lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output-lulusan.store');
Route::get('/admin/output-lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output-lulusan.edit');
Route::put('/admin/output-lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output-lulusan.update');
Route::delete('/admin/output-lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output-lulusan.delete');

Route::view('/lab-tanah-air', 'labs.tanah_dan_air')->name('lab.tanah_air');
Route::view('/lab-konservasi', 'labs.konservasi')->name('lab.konservasi');
Route::view('/lab-persemaian', 'labs.persemaian')->name('lab.persemaian');
Route::view('/lab-silfikutur', 'labs.silfikutur')->name('lab.silfikutur');
Route::view('/lab-perencanaan', 'labs.perencanaan')->name('lab.perencanaan');
Route::view('/lab-sosial_ekonomi', 'labs.sosial_ekonomi')->name('lab.sosial_ekonomi');

Route::get('admin/dosen', [DosenController::class, 'index'])->name('admin.dosen.index');
Route::get('admin/dosen/create', [DosenController::class, 'create'])->name('admin.dosen.create');
Route::post('admin/dosen', [DosenController::class, 'store'])->name('admin.dosen.store');
Route::get('admin/dosen/{id}/edit', [DosenController::class, 'edit'])->name('admin.dosen.edit');
Route::put('admin/dosen/{id}', [DosenController::class, 'update'])->name('admin.dosen.update');
Route::delete('admin/dosen/{id}', [DosenController::class, 'destroy'])->name('admin.dosen.destroy');

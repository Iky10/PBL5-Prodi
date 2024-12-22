<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OutputLulusanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;
use App\Http\Controllers\Admin\AdminOutputLulusanController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class, 'index']);
Route::get('/berita/{id}', [IndexController::class, 'beritaDetail'])->name('beritaDetail');
Route::get('/berita_lainnya', [IndexController::class, 'beritaLainnya'])->name('beritaLainnya');

Route::get('/output_lulusan',[OutputLulusanController::class, 'index'])->name('output_lulusan.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/alasan', [AlasanController::class, 'index'])->name('alasan.index');
Route::get('/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
Route::post('/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
Route::get('/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
Route::put('/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
Route::delete('/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

Route::get('/admin/alasan_banner', [AlasanBannerController::class, 'index'])->name('admin.alasan_banner.index');
Route::get('/admin/alasan_banner/edit/{id}', [AlasanBannerController::class, 'edit'])->name('admin.alasan_banner.edit');
Route::put('/admin/alasan_banner/update/{id}', [AlasanBannerController::class, 'update'])->name('admin.alasan_banner.update');

Route::get('/admin/berita', [AdminBeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita/create', [AdminBeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita/store', [AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/edit/{id}', [AdminBeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('/admin/berita/update/{id}', [AdminBeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('/admin/berita/delete/{id}', [AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

Route::get('/admin/output_lulusan', [AdminOutputLulusanController::class, 'index'])->name('admin.output_lulusan.index');
Route::get('/admin/output_lulusan/create', [AdminOutputLulusanController::class, 'create'])->name('admin.output_lulusan.create');
Route::post('/admin/output_lulusan/store', [AdminOutputLulusanController::class, 'store'])->name('admin.output_lulusan.store');
Route::get('/admin/output_lulusan/edit/{id}', [AdminOutputLulusanController::class, 'edit'])->name('admin.output_lulusan.edit');
Route::put('/admin/output_lulusan/update/{id}', [AdminOutputLulusanController::class, 'update'])->name('admin.output_lulusan.update');
Route::delete('/admin/output_lulusan/delete/{id}', [AdminOutputLulusanController::class, 'delete'])->name('admin.output_lulusan.delete');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\AlasanBannerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/alasan', [AlasanController::class, 'index'])->name('alasan.index');
Route::get('/alasan/create', [AlasanController::class, 'create'])->name('alasan.create');
Route::post('/alasan/create', [AlasanController::class, 'store'])->name('alasan.store');
Route::get('/alasan/edit/{id}', [AlasanController::class, 'edit'])->name('alasan.edit');
Route::put('/alasan/update/{id}', [AlasanController::class, 'update'])->name('alasan.update');
Route::delete('/alasan/delete/{id}', [AlasanController::class, 'destroy'])->name('alasan.delete');

Route::get('/admin/alasan_banner', [AlasanBannerController::class, 'index'])->name('admin.alasan_banner.index');
Route::put('/admin/alasan_banner/update/{id}', [AlasanBannerController::class, 'update'])->name('admin.alasan_banner.update');
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::put('/admin/berita/update/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
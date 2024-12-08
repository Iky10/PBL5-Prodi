<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlasanController;

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

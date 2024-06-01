<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

Route::get('/admin', function () {
    return view('admin.index');
});
Route::post('login', [AdminController::class, 'login'])->name('loginAdmin');
Route::get('logout', [AdminController::class, 'logout'])->name('logoutAdmin');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::resource('admin', AdminController::class);
Route::resource('products', ProductController::class);

Route::get('/', [AdminController::class,'index'])->name('/');

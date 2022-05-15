<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;



Route::get('admin/users/login', [LoginController::class, 'index']);
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::get('admin/main', [Maincontroller::class, 'index'])->name('admin.main');
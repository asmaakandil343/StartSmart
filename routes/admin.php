<?php

use Illuminate\Support\Facades\Route;

/**
 * REGISTER TO DASHBOARD
 * */
Route::get('registerAdmin',[App\Http\Controllers\admin\Auth\registerController::class, 'showRegistrationForm']);
Route::post('register',[App\Http\Controllers\admin\Auth\registerController::class, 'register'])->name('register_admin');
/**END REGISTER TO DASHBOARD*/

/**
 * Login TO DASHBOARD
 * */
Route::get('loginAdmin',[App\Http\Controllers\admin\Auth\LoginController::class, 'showLoginForm']);
Route::post('login',[App\Http\Controllers\admin\Auth\LoginController::class, 'login'])->name('login_admin');
/**END Login TO DASHBOARD*/

Route::get('users',[App\Http\Controllers\admin\userController::class,'index']);

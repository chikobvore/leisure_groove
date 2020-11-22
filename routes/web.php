<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class,'index'])->name('admin-home');

Route::get('/superadmin', [SuperAdminController::class,'index'])->name('superadmin-home');
Route::get('/landlords', [SuperAdminController::class,'landlords'])->name('landlords');

Route::get('/user', [UserController::class,'index'])->name('user-home');

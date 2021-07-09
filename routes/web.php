<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
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

Route::get('/', function() {
    return view('auth.login');
});

Route::view('/profile','profile');



Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







//hak akses untuk admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
    Route::post('/students', [App\Http\Controllers\StudentController::class, 'store']);
    Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);
    Route::view('/document','document');
});

Route::group(['middleware' => 'user'], function () {
//user
Route::get('/user', [UserController::class, 'index'])->name('user');
});

Route::group(['middleware' => 'pelanggan'], function () {
//pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
});
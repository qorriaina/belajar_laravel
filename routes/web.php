<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => 'admin'], function(){
    Route::view('/document', 'document');
    Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
    Route::post('/siswa', [App\Http\Controllers\SiwaController::class, 'store']);
    Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
});

Route::group(['middlware' => 'user'], function(){
    Route::get('/user', [UserController::class, 'index'])->name('user');
});


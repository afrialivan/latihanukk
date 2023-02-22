<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [pengaduanController::class, 'index']);
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);
Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);


Route::post('/pengaduan', [pengaduanController::class, 'store']);
Route::get('/semualaporan', [pengaduanController::class, 'all']);
Route::get('/laporansaya/semua', [userController::class, 'index']);
Route::get('/laporansaya/belum', [userController::class, 'belum']);
Route::get('/laporansaya/proses', [userController::class, 'proses']);
Route::get('/laporansaya/selesai', [userController::class, 'selesai']);

Route::get('/dashboard/laporan', [petugasController::class, 'index']);

<?php

use App\Http\Controllers\dashboardController;
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

Route::group(['middleware' => 'auth'], function () {
  Route::post('/pengaduan', [pengaduanController::class, 'store'])->middleware('auth');
  Route::get('/tanggapan/{pengaduan}', [pengaduanController::class, 'show'])->middleware('auth');
  Route::get('/semualaporan', [pengaduanController::class, 'all'])->middleware('auth');
  Route::get('/laporansaya/semua', [userController::class, 'index'])->middleware('auth');
  Route::get('/laporansaya/belum', [userController::class, 'belum'])->middleware('auth');
  Route::get('/laporansaya/proses', [userController::class, 'proses'])->middleware('auth');
  Route::get('/laporansaya/selesai', [userController::class, 'selesai'])->middleware('auth');
});

Route::group(['middleware' => 'petugas'], function () {
  Route::get('/dashboard/laporan', [dashboardController::class, 'index']);
  Route::get('/dashboard/tanggapan/{pengaduan}', [dashboardController::class, 'show']);
  Route::post('/dashboard/tanggapan/{pengaduan}', [dashboardController::class, 'tanggapan']);
  Route::get('/dashboard/proses/{pengaduan}', [dashboardController::class, 'proses']);
  Route::get('/dashboard/selesai/{pengaduan}', [dashboardController::class, 'selesai']);
  Route::get('/dashboard/batalselesai/{pengaduan}', [dashboardController::class, 'batal']);
  Route::get('/dashboard/belum', [dashboardController::class, 'belumView']);
  Route::get('/dashboard/proses', [dashboardController::class, 'prosesView']);
  Route::get('/dashboard/selesai', [dashboardController::class, 'selesaiView']);
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard/users', [dashboardController::class, 'users']);
    Route::post('/dashboard/ubahlevel/{user}', [dashboardController::class, 'update']);
    Route::get('/dashboard/cetak', [dashboardController::class, 'export']);
  });
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BakhumController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MahasiswaController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [LoginController::class, 'index'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/attemptLogin', [LoginController::class, 'attemptLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/pendaftaran', function () {
    if (!Session::has('isLoggedIn') && !Auth::check()) {
        return redirect()->to('login');
      }
    return view('pendaftaran');
});

Route::get('/formpendaftaran', function () {
    return view('formpendaftaran');
});
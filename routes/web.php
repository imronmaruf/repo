<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/kategori-repo-tga', function () {
    return view('landings.pages.kategori.repo-tga');
});

Route::get('/kategori-repo-kp', function () {
    return view('landings.pages.kategori.repo-kp');
});

Route::middleware(['guest'])->group(function () {
    Route::view('/', 'landings.pages.landing-page');
    Route::get('/sesi', [AuthController::class, 'index'])->name('auth');
    Route::post('/sesi', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/user');
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
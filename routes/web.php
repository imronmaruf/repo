<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataDosbingController;
use App\Http\Controllers\DataMhsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::middleware(['guest'])->group(function () {
    Route::view('/', 'landings.pages.landing-page');
    Route::view('/kategori-repo-tga', 'landings.pages.kategori.repo-tga');
    Route::view('/kategori-repo-kp', 'landings.pages.kategori.repo-kp');
    Route::get('/auth', [AuthController::class, 'index'])->name('auth');
    Route::post('/auth', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home','/user');
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');

    // data mhs
    Route::get('/datamhs',[DataMhsController::class,'index'])->name('datamhs');


    //data dosbing
    Route::get('/dosbing',[DataDosbingController::class,'index'])->name('dosbing');
    Route::post('/tbh-dosbing',[DataDosbingController::class,'store']);
    Route::post('/edit-dosbing/{id}',[DataDosbingController::class,'edit']);
    Route::post('/hps-dosbing/{id}',[DataDosbingController::class,'delete']);


    // User Control
    Route::get('/usercontrol',[UserControlController::class,'index'])->name('usercontrol');
    
    // kategori
    Route::get('/kategori',[KategoriController::class,'index'])->name('kategori');
    Route::post('/tbh-kategori',[KategoriController::class,'store']);
    Route::post('/edit-kategori/{id}',[KategoriController::class,'edit']);
    Route::post('/hps-kategori/{id}',[KategoriController::class,'delete']);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
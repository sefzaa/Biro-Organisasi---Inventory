<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', [AuthController::class, 'index'])->name('index');
// Route::post('/cek_login', [AuthController::class, 'cek_login']);
// Route::get('/logout', [AuthController::class, 'logout']);

// Route::group(['middleware' => ['auth', 'checkLevel:admin']], function(){

//     //Data Master - User
//     Route::get('/user', [UserController::class, 'index']);

//     //Data Master - Kategori
//     Route::get('/kategori', [KategoriController::class, 'index']);

//     //Data Master - User
//     Route::get('/barang', [BarangController::class, 'index']);

//     });


// Route::group(['middleware' => ['auth', 'checkLevel:admin, gudang']], function(){
    
//         Route::get('/home', [HomeController::class, 'home']);

//     });

Route::get('/', function () {
    return view ('home');
});



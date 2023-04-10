<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//============================
//===========Biro=============
//============================
Route::get('/Dashboard',[ BarangController::class, 'stok'])->name('Dashboard');

Route::get('/barangMasuk',[ BarangMasukController::class, 'index'])->name('barangMasuk');
Route::post('/barangMasuk/create',[ BarangMasukController::class, 'create']);
Route::match(['get', 'post'],'/barangMasuk/edit/{id}', [BarangMasukController::class, 'edit']);
Route::delete('/barangMasuk/destroy/{id}',[ BarangMasukController::class, "destroy" ])->name('hapus');
Route::get('/barangMasuk/detail/{id}',[ BarangMasukController::class, 'show'])->name('detail');



Route::get('/barangKeluar',[ BarangKeluarController::class, 'index'])->name('barangKeluar');
Route::post('/barangKeluar/create',[ BarangKeluarController::class, 'create']);



Route::get('/barang',[ BarangController::class, 'index'])->name('barang');
Route::post('/barang/create',[ BarangController::class, 'create']);






//============================
//===========Login============
//============================
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//==============================
//===========Testing============
//==============================
Route::get('/', function(){
    return view ('welcome');
});


Route::get('/dashboardAdmin',[ BarangController::class, 'stok'])->name('barang');




// Route untuk admin
Route::prefix('admin')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

// Route untuk user
Route::prefix('user')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;



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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function (){
	return view ('home');
})->name ('home');

// Route::get('/home', 'HomeController@home')->name('home');

// Route::get('/barang','BarangController@index');

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang', [BarangController::class, 'store']);
Route::get('/barang/{barang}', [BarangController::class, 'index']);
// Route::get('/barang/{barang}/edit', [BarangController::class, 'edit']);
// Route::patch('/barang/{barang}', [BarangController::class, 'update']);



Route::get('/pembelian', [PembelianController::class, 'index']);
Route::get('/pembelian/create', [PembelianController::class, 'create']);
Route::post('/pembelian', [PembelianController::class, 'store']);
Route::get('/pembelian/{pembelian}', [PembelianController::class, 'index']);




Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{pelanggan}', [PelangganController::class, 'index']);



Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/create', [PenjualanController::class, 'create']);
Route::post('/penjualan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{penjualan}', [PenjualanController::class, 'index']);

// Route::get('/barang/{barang}/edit', [BarangController::class, 'edit']);
// Route::patch('/barang/{barang}', [BarangController::class, 'update']);







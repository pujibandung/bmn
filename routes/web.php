<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangDetailController;

use App\Http\Controllers\WebController;



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

// 1. CRUD TABEL RUANGAN
Route::get('/ruangan',[RuanganController::class, 'index']);

Route::get('/ruangan/tambah',[RuanganController::class, 'tambah']);
Route::post('/ruangan/store',[RuanganController::class, 'store']);

Route::get('/ruangan/edit/{id}',[RuanganController::class, 'edit']);
Route::put('/ruangan/update/{id}',[RuanganController::class, 'update']);

Route::get('/ruangan/hapus/{id}',[RuanganController::class, 'delete']);



// 2. CRUD TABEL BARANGs
Route::get('/barang',[BarangController::class, 'index']);

Route::get('/barang/tambah',[BarangController::class, 'tambah']);
Route::post('/barang/store',[BarangController::class, 'store']);

Route::get('/barang/edit/{id}',[BarangController::class, 'edit']);
Route::put('/barang/update/{id}',[BarangController::class, 'update']);

Route::get('/barang/hapus/{id}',[BarangController::class, 'delete']);



// 3. BARANG DETAIL
Route::get('/barang_detail/{barang_id}',[BarangDetailController::class, 'index']);

Route::get('/barang_detail/tambah/{barang_id}',[BarangDetailController::class, 'tambah']);
Route::post('/barang_detail/store',[BarangDetailController::class, 'store']);

Route::get('/barang_detail/edit/{id}',[BarangDetailController::class, 'edit']);
Route::put('/barang_detail/update/{id}',[BarangDetailController::class, 'update']);


Route::get('/barang_detail/hapus/{id}',[BarangDetailController::class, 'delete']);

Route::get('/article',[WebController::class, 'index']);








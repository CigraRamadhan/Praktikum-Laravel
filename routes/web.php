<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProdukController;
use App\Http\Contollers\Controller;
use App\Http\Controllers\MahasiswaController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('testing');
});


Route::get('/user/{id}', function($id) {
    return "Profil User dengan ID:".$id;
});

Route::get('/produk/{slug?}', function($slug='semua-produk') {
    return "Menampilkan ".$slug;
});

Route::get('/mahasiswa', [TestController::class, 'index']);
Route::get('/testproduk', [ProdukController::class, 'index']);
Route::get('/showproduk', [ProdukContoller::class, 'halpro']);
Route::get('/halamanperoduk', [ProdukContoller::class,'testdoang']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
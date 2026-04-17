<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
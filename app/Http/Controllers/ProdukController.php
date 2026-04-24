<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller

{

     public function testdoang () {
        return view('produk');

    }
    public function index () {
        return 'Ini adalah halaman untuk data produk';
    }

    public function halpro () {
        return 'Ini adalah halaman utama produk';
    }
        
}

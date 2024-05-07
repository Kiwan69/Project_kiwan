<?php

use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Telepon;

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

Route::get('/home',function() {
    $nama = "Kiwan";
    $jenis_kelamin = "Laki-laki";
    $alamat = "Katapang";
    $pendidikan = "SMK";
    $pekerjaan = "Nganggur";
    return view('biodata', compact('nama','jenis_kelamin','alamat','pendidikan','pekerjaan'));
});

Route::get('/about',function() {
    return view('biodata2');
});

Route::get('/contact',function() {
    return view('biodata3');
});

//parameter
Route::get('/p/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}',function (Request $request, $nama, $jk, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});

Route::get('/data_post',function() {
    //menampilkan semua data
    $posts = Post::find(2);

    return $posts;
});

Route::get('/data_produk',function() {
    //menampilkan semua data
    $produks = Produk::all();

    return view('tampil_produk', compact('produks'));
});

Route::get('/data_pengguna',function() {
    //menampilkan semua data
    $penggunas = Pengguna::find(2);

    return $penggunas;
});

Route::get('/data_telepon',function() {
    //menampilkan semua data
    $telepons = Telepon::all();

    return view('tampil_telepon', compact('telepons'));
});

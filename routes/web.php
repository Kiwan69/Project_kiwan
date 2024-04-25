<?php

use Illuminate\Support\Facades\Route;

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
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

Route::get('/mahasiswa', function () {
    $nama = 'Budi Sudarsono';
    $saldo = 420000;
    return view('saldo.mahasiswa', compact('nama','saldo'));
});

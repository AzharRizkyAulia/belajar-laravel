<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider within a group which       |
| contains the "web" middleware group. Now create something great!         |
|--------------------------------------------------------------------------|                                                                         |
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hal2', function () {
    return "<h1>Ini Halaman Dua</h1>";
});

Route::get('biodata', function () {
    $nama = "Azhar";
    $jk = "Laki-Laki";
    $tmpt = "Bandung";
    $tgl = "06-03-2005";
    $alamat = "Rancamanyar Regency 2";
    $agama = "Islam";
    $hobi = "Ntah";

    return "Nama            : ".$nama ."<br>
            Jenis Kelamin   : " .$jk ."<br>
            Tempat Lahir    : ".$tmpt ."<br>
            Tanggal Lahir   : ".$tgl ."<br>
            Alamat          : ".$alamat ."<br>
            Agama           : ".$agama ."<br>
            Hobi            : " .$hobi ."<br>";
});

Route::get('biodata2', function () {
    $nama = "Azhar";
    $jk = "Laki-Laki";
    $tmpt = "Bandung";
    $tgl = "06-03-2005";
    $alamat = "Rancamanyar Regency 2";
    $agama = "Islam";
    $hobi = "Ntah";
    return view('biodata', compact('nama','jk','tmpt','tgl','alamat','agama','hobi'));
});

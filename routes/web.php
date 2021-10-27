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

Route::get('/input/{nama}/{jk}/{tmpt}/{tgl}/{alamat}/{agama}/{hobi}', function ($nama,$jk,$tmpt,$tgl,$alamat,$agama,$hobi) {
    echo "<p>Nama              : " .$nama ."</p>";
    echo "<p>Jenis Kelamin     : " .$jk ."</p>";
    echo "<p>Tempat Lahir      : " .$tmpt ."</p>";
    echo "<p>Tanggal Lahir     : " .$tgl ."</p>";
    echo "<p>Alamat            : " .$alamat ."</p>";
    echo "<p>Agama             : " .$agama ."</p>";
    echo "<p>Hobi              : " .$hobi;
});

Route ::get('blog',function() {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga']
    ];
    return view('blog', compact('data'));
});

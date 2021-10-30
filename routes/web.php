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

Route::get('/input/{nama?}/{jk?}/{tmpt?}/{tgl?}/{alamat?}/{agama?}/{hobi?}',
function (
    $nama = null,
    $jk = null,
    $tmpt = null,
    $tgl = null,
    $alamat = null,
    $agama = null,
    $hobi = 'Tidak Ada') {
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

Route ::get('absen',function() {
    $absen = [
        ['nis' => 1, 'nama' => 'Alya' , 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 2, 'nama' => 'Anggi', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 3, 'nama' => 'Anisa', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 4, 'nama' => 'Arif' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 5, 'nama' => 'Astri', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 6, 'nama' => 'Azhar', 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 7, 'nama' => 'Aziz' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 8, 'nama' => 'Bima' , 'jk' => 'laki-laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 9, 'nama' => 'Cindy', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 10, 'nama' => 'Dinda', 'jk' => 'perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
    ];
    return view('absen', compact('absen'));
});

Route ::get('siswa',function() {
    $siswas = [
        [
            'id' => 1, 
            'nama' => 'Azhar Rizky Aulia', 
            'username' => 'Azhar',
            'email' => 'azharrizky3129@gmail.com', 
            'alamat' => 'Rancamanyar Regency 2', 
            'mapel' => [
                ['pelajaran' => 'Bahasa Indonesia'],
                ['pelajaran' => 'Bahasa Inggris'],
                ['pelajaran' => 'Bahasa Jepang'],
                ['pelajaran' => 'Matematika']
            ]
        ],
    ];
    return view('siswa', compact('siswas'));
});

Route::get('/nilai/{nama?}/{pel1?}/{pel2?}/{pel3?}/{pel4?}',
function (
    $nama = null,
    $pel1 = null,
    $pel2 = null,
    $pel3 = null,
    $pel4 = null) {
    echo "<h2>Data Nilai</h2>";
    echo "<p>Nama                              : " .$nama ."</p>";
    echo "<p>Pelajaran 1(Matematika)           : " .$pel1 ."</p>";
    echo "<p>Pelajaran 2(Produktif)            : " .$pel2 ."</p>";
    echo "<p>Pelajaran 3(Bahasa Indonesia)     : " .$pel3 ."</p>";
    echo "<p>Pelajaran 4(Bahasa Inggris)       : " .$pel4 ."</p>";
    $rata = ($pel1 + $pel2 + $pel3 + $pel4) / 4;
    echo "<p>Rata Rata :" .$rata ."</p>";
    if ($rata >= 90 && $rata <= 100) {
        $grade = "A";
    }
    elseif ($rata >= 80 && $rata <= 90) {
        $grade = "B";
    }
    elseif ($rata >= 70 && $rata <= 80) {
        $grade = "C";
    }
    elseif ($rata < 70 && $rata >= 0) {
        $grade = "D";
    }
    else{
        $grade = "Nilai Tidak Ada";
    }
    echo "<p>Grade       : " .$grade ."</p>";    
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}',
function (
    $makanan = null,
    $minuman = null,
    $cemilan = null) {
        
    if ($makanan != null && $minuman == null && $cemilan == null) {
        echo "</h2>Anda Memesan</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
    }
    elseif ($makanan != null && $minuman != null && $cemilan == null) {
        echo "</h2>Anda Memesan</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
        echo "Minuman : <b>" .$minuman ."</b><br>";
    }
    elseif ($minuman != null && $cemilan != null && $makanan != null) {
        echo "</h2>Anda Memesan</h2><br>";
        echo "Makanan : <b>" .$makanan ."</b><br>";
        echo "Minuman : <b>" .$minuman ."</b><br>";
        echo "Cemilan : <b>" .$cemilan ."</b><br>";
    }
    else{
        echo "Silahkan Pulang<br>";        
    }
});

//Menampilkan Database
Route::get('/testmodel', function() {
    $query = App\Models\Post::all();
    return $query;
});

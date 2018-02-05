<?php

use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;

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
Route::get('/soal1',function(){

	$dosen = Dosen::all();
	$mahasiswa = Mahasiswa::all();

	echo '<center>'.'One to Many'.'</center>';
    foreach ($dosen as $get1)
    	echo 'Nama Dosen : '.' <strong>' . $get1->nama . '</strong>';
    foreach ($mahasiswa as $get2)
    	echo '<li> Nama Mahasiswa : '.' <strong>' . $get2->nama . '</strong></li>';
    	
});
Route::get('/soal2', function() {

	$wali = Wali::where('nama', '=', 'Agung Wahyudi')->first();
	$mahasiswa = Mahasiswa::where('nis', '=', '1015015001')->first();

	echo '<center>'.'One to One'.'</center>';
	echo 'Nama Wali : '.' <strong>' . $mahasiswa->wali->nama . '</strong>';
    echo '<li> Nama Mahasiswa : '.' <strong>' . $wali->mahasiswa->nama . '</strong></li>';
});
Route::get('soal3', function() {
		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$mahasiswa = Mahasiswa::where('nama', '=', 'Malik')->get();
		# Kirim variabel ke View
		return View::make('soal3', compact('mahasiswa'));

});
Route::get('soal4', function() {
		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
		$mahasiswa = Mahasiswa::with('wali','dosen','jurusan','mata_kuliah')->get();
		# Kirim variabel ke View
		return View::make('soal4', compact('mahasiswa'));
	});
Route::get('/', function () {
    return view('welcome');
});

// #remed
// Route::get('soalnu1', function() {
// 		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
// 		$dosen = Dosen::with('Mahasiswa')->get();
// 		# Kirim variabel ke View
// 		return View::make('soalnu1', compact('dosen'));
// 	});

// Route::get('soal2', function() {
// 		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
// 		$siswa = siswa::where('nama', '=', 'Alif Firmansyah')->get();
// 		# Kirim variabel ke View
// 		return View::make('soal2', compact('siswa'));
// 	});
// Route::get('soal3', function() {
// 		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
// 		$siswa = siswa::where('nama', '=', 'Alif Firmansyah')->get();
// 		# Kirim variabel ke View
// 		return View::make('soal3', compact('siswa'));
// 	});
// Route::get('soal4', function() {
// 		# Ambil semua data guru (lengkap dengan semua relasi yang ada)
// 		$siswa = siswa::with('wali','guru','kelas','mata_pelajaran')->get();
// 		# Kirim variabel ke View
// 		return View::make('soal4', compact('siswa'));
// 	});
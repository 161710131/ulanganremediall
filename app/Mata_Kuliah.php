<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;


class Mata_Kuliah extends Model
{
    protected $table = 'mata__kuliahs';
    protected $fillable = array('nama_matkul','kkm');

    public function mahasiswa() {
		return $this->belongsToMany('App\Mahasiswa', 'matkul_mahasiswa', 'mapel_id', 'siswa_id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;


class Wali extends Model
{
    protected $table = 'walis';
    protected $fillable = array('nama','alamat','siswa_id');

    public function mahasiswa() {
		return $this->belongsTo('App\Mahasiswa', 'siswa_id');
	}

}

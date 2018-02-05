<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;


class Jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = array('nama_jurusan');

    public function mahasiswa() {
		return $this->belongsTo('App\Mahasiswa', 'kelas_id');
	}
}

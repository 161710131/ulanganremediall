<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = array('nama', 'nipd','alamat','mata_kuliah');

    public function mahasiswa() {
		return $this->hasMany('App\Mahasiswa', 'guru_id');
	}

}

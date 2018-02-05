<?php

use Illuminate\Database\Seeder;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	

		$dosen = Dosen::create(array(
			'nama' => 'Iik Rahmat',
			'nipd' => '1234567800',
		    'alamat' => 'Jl. Moh Toha',
			'mata_kuliah' => 'IPS'));

		$this->command->info('Data dosen telah diisi!');

		$jurusan = Jurusan::create(array(
			'nama_jurusan' => 'Rekayasa Perangkat Lunak',
			'nama_jurusan' => 'Teknik Kendaraan Ringan',
			'nama_jurusan' => 'Teknik Sepeda Motor'));

		$this->command->info('Data Jurusan telah diisi!');

		$ipa = Mata_Kuliah::create(array('nama_matkul' => 'IPA','kkm' => '75'));
		$ips = Mata_Kuliah::create(array('nama_matkul' => 'IPS','kkm' => '80'));


		$a = Mahasiswa::create(array(
			'nama' => 'Ahmad Nur',
			'nis'  => '1015015001',
		  	'guru_id' => $dosen->id,
		  	'kelas_id' => $jurusan->id));
		$b = Mahasiswa::create(array(
			'nama' => 'Wahyu',
			'nis'  => '1015015002',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id));
		$c = Mahasiswa::create(array(
			'nama' => 'Rohman',
			'nis'  => '1015015003',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id));
		$d = Mahasiswa::create(array(
			'nama' => 'Malik',
			'nis'  => '1015015004',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id));
		$e = Mahasiswa::create(array(
			'nama' => 'Fathur',
			'nis'  => '1015015005',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan->id));

		
		$a->mata_kuliah()->attach($ipa->id);
		$b->mata_kuliah()->attach($ips->id);
		$c->mata_kuliah()->attach($ipa->id);
		$d->mata_kuliah()->attach($ips->id);
		$d->mata_kuliah()->attach($ipa->id);

		$this->command->info('Mahasiswa beserta Mata Kuliah telah diisi!');
		$this->command->info('Mahasiswa telah diisi!');

		

		Wali::create(array(
			'nama'  => 'Agung Wahyudi',
			'alamat' => 'Kebon Kalapa',
			'siswa_id' => $a->id
			));

		Wali::create(array(
			'nama'  => 'Candra Hendriansyah',
			'alamat' => 'Jl.Perbas',
			'siswa_id' => $b->id
			));

		Wali::create(array(
			'nama'  => 'Agung Ciptawan',
			'alamat' => 'Jl.Cibaduyut',
			'siswa_id' => $c->id
			));

		Wali::create(array(
			'nama'  => 'Salman Hadi',
			'alamat' => 'Komplek Regency 1',
			'siswa_id' => $d->id
			));

		Wali::create(array(
			'nama'  => 'Ute Juli Kurnia',
			'alamat' => 'Cibiru',
			'siswa_id' => $e->id
			));


		$this->command->info('Data mahasiswa dan wali telah diisi!');













    }
}

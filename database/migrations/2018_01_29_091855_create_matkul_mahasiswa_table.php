<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatkulMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('mahasiswas')->onDelete('CASCADE');
            $table->unsignedInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mata__kuliahs')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul_mahasiswa');
    }
}

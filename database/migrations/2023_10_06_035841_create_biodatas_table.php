<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id('nik');
            $table->string('name');
            $table->string('nip');
            $table->enum('Jenis_kelamin', ['L','P']);
            $table->string('status_perkawinan');
            $table->string('Tempat_lahir');
            $table->date('Tanggal_lahir');
            $table->string('karpeg');
            $table->date('TMT_KGB_terakhir');
            $table->string('pangkat');
            $table->string('golongan');
            $table->date('TMT');
            $table->string('KD');
            $table->string('Jabatan');
            $table->integer('idPendidikan');
            $table->date('KGB_YAD');
            $table->date('TMT_pensiun');
            $table->string('keterangan');
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
        Schema::dropIfExists('biodata');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttrmToRekammedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekammedis', function (Blueprint $table) {
            $table->date('tanggal');
            $table->integer('usia');
            $table->string('anamnesa_pemeriksaan_fisik_perawat');
            $table->string('perawat');
            $table->string('anamnesa_pemeriksaan_dokter');
            $table->string('dokter');
            $table->integer('tinggi_badan');
            $table->integer('sistole');
            $table->integer('diastole');
            $table->integer('respirasi');
            $table->integer('nadi');
            $table->string('apoteker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekammedis', function (Blueprint $table) {
            //
        });
    }
}

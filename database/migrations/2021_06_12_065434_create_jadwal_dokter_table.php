<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_dokter');
            $table->string('senin');
            $table->string('selasa');
            $table->string('rabu');
            $table->string('kamis');
            $table->string('jumat');
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
        Schema::dropIfExists('jadwal_dokter');
    }
}

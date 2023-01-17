<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJadwalToDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokters', function (Blueprint $table) {
            $table->unsignedBigInteger('jadwal_id')->nullable();
            $table->foreign('jadwal_id')->references('id')->on('jadwal_dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokters', function (Blueprint $table) {
            //
        });
    }
}

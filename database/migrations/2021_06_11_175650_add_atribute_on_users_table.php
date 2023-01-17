<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAtributeOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_pasien')->nullable();
            $table->string('nim')->nullable();
            $table->string('mayor');
            $table->string('fakultas');
            $table->string('kode_strata');
            $table->string('jenis_kelamin');
            $table->integer('umur');
            $table->string('no_bpjs');
            $table->string('goldar');
            $table->string('no_hp');
            $table->text('alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            //
        });
    }
}

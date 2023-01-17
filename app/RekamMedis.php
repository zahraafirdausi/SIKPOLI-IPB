<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = [ 'user_id', 'berat_badan','tekanan_darah','keluhan','diagnosis', 'tanggal',  'usia', 'anamnesa_pemeriksaan_fisik_perawat', 'perawat', 'anamnesa_pemeriksaan_dokter',  'dokter', 'tinggi_badan',  'sistole', 'diastole', 'respirasi', 'nadi', 'apoteker' ];

    public function user()
        {
            return $table->hasOne('\App\User');
        }

    public function userid()
        {
            return $this->belongsTo('\App\User','user_id');
        }
}

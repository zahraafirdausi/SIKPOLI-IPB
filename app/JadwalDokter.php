<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    protected $table = 'jadwal_dokter';
    protected $fillable = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'id_dokter'];

    public function dokter_users()
    {
    	return $this->belongsTo('\App\Dokter','id_dokter');
    }

    public function dokter()
    {
        return $this->hasOne('\App\Dokter');
    }
}

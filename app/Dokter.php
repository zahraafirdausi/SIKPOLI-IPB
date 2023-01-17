<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class Dokter extends Model
//{}
    class Dokter extends Authenticatable
    {
        use Notifiable;
    
        protected $guard = 'dokter';
    
        protected $fillable = [
            'name', 'email', 'password', 'id_jadwal'
        ];
    
        protected $hidden = [
            'password', 'remember_token',
        ];

        public function jadwal()
        {
            return $this->belongsTo('\App\JadwalDokter','id_jadwal');
        }

        public function jadwal_rel()
        {
            return $this->hasOne('\App\JadwalDokter');
        }
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function daftar_jadwal_dokter()
    {
        $jadwal_dokter = \App\JadwalDokter::all();
        return view('jadwal-dokter',['jadwal_dokter' => $jadwal_dokter]);
       // dd($jadwal_dokter);
    }
}

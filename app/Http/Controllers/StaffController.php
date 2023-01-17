<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function dashboard()
    {
    	return view('staff.dashboard-staff');
    }

    // JADWAL DOKTER
    public function jadwal_dokter()
    {
    	$jadwal_dokter = \App\JadwalDokter::all();
    	return view('staff.jadwal-dokter', ['jadwal_dokter' => $jadwal_dokter]);
    }

    public function jadwal_dokter_tambah()
    {
    	$dokter = \App\Dokter::all();
    	return view('staff.tambah-jadwal-dokter', ['dokter' => $dokter]);
    }

    public function jadwal_dokter_create(Request $request)
    {
    	\App\JadwalDokter::create($request->all());
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di simpan');
    }

    public function jadwal_dokter_edit($id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	return view('staff.edit-jadwal-dokter',['edit_jadwal' => $edit_jadwal]);
    }

    public function jadwal_dokter_update(Request $request, $id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	$edit_jadwal->update($request->all());
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di update');
    }

    public function jadwal_dokter_delete($id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	$edit_jadwal->delete();
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di hapus');
    }

    // REKAM MEDIS 

    public function rekam_medis_daftar()
    {
        $daftar_user = \App\User::all();
        //dump($daftar_user);
        return view('staff.daftar-rekam-medis',['daftar_user' => $daftar_user]);
    	//return view('staff.daftar-rekam-medis');
    }

    public function rekam_medis_individu($id)
    {
        //$user_individu = \App\User::all();
        //$user_individu = \App\User::find($id);
        //dd($user_individu);
        //$rm_individu = \App\RekamMedis::find($user_id);
        //return view('staff.rekam-medis-individu',['user_individu' => $user_individu]);
       // return view('staff.rekam-medis-individu');
        $rekammedisbefore = \App\RekamMedis::where('user_id',$id)->get();
        //dump($rekammedisbefore);
        return view('staff/rekam-medis-individu', ['rekammedis' => $rekammedisbefore]);

    }

    public function rekam_medis_tambah()
    {
        $user = \App\User::all();
    	return view('staff.tambah-rekam-medis', ['user' => $user]);
    	//return view('staff.tambah-rekam-medis');
    }

    public function rekam_medis_create(Request $request)
    {
        \App\RekamMedis::create($request->all());
    	return redirect('/admin/rekam-medis')->with('sukses', 'Rekam Medis Berhasil di Simpan');
    	//return view('staff.tambah-rekam-medis');
    }

    public function rekam_medis_edit($id)
    {
    	$rekam_medis = \App\RekamMedis::find($id);
        return view('staff.edit-rekam-medis', ['rekam_medis' => $rekam_medis]);
    }

    public function rekam_medis_update(Request $request, $id)
    {
        $rekam_medis = \App\RekamMedis::find($id);
        $rekam_medis->update($request->all());
        return redirect('/admin/rekam-medis/individu/'.$rekam_medis->user_id)->with('sukses', 'Rekam Medis Berhasil di Update');
    }

    public function rekam_medis_detail($id)
    {
        //$rekammedis_individu = \App\RekamMedis::where('user_id',$id)->get();
        $rekammedis = \App\RekamMedis::find($id);
        //dump($rekammedis_individu);
        return view('staff/detail-rekam-medis', ['rekam_medis' => $rekammedis]);
        // return view('staff.detail-rekam-medis');
    }

    public function rekam_medis_delete($id)
    {
        $rekammedis = \App\RekamMedis::find($id);
        $rekammedis->delete();
        return redirect('/admin/rekam-medis/individu/'.$rekammedis->user_id)->with('sukses','Rekam Medis Berhasil Dihapus');
    }

}

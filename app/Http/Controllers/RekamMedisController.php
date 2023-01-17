<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function rekammedis($id)
    {
        $data_rekammedis = \App\RekamMedis::where('user_id',$id)->get();
        return view('rekam-medis',['data_rekammedis' => $data_rekammedis]);
    }

    public function rekammedisshow($id)
    {
        $rekammedis_mhs = \App\RekamMedis::find($id);
        return view('rekam-medis-individu', ['rekammedis_mhs' => $rekammedis_mhs]);
        //return view('rekam-medis-individu');
        //dd($rekammedis_mhs);
    }

    public function rekammediscreate(Request $request)
    {
        \App\RekamMedis::create($request->all());
        return redirect('staff.rekam-medis')->with('rekammedissukses','Rekam Medis Berhasil di Input');
    }

    public function rekammedisedit($id)
    {
        $rekammedisbefore = \App\RekamMedis::find($id);
        //dd($rekammedisbefore);
        return view('rekam-medis-edit', ['rekammedis' => $rekammedisbefore]);
    }

    public function rekammedisupdate(Request $request,$id)
    {
        $rekammedisbefore = \App\RekamMedis::find($id);
        $rekammedisbefore->update($request->all());
        return redirect('/rekam-medis')->with('rekammedissukses','Rekam Medis Berhasil di Update');
    }

    public function rekammedisdelete($id)
    {
        $rekammedis = \App\RekamMedis::find($id);
        $rekammedis->delete($rekammedis);
        return redirect('/rekam-medis')->with('rekammedissukses','Rekam Medis Berhasil di Hapus');
    }
}

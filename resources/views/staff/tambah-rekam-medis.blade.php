@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('active-rm-2') active @endsection

@section('title-content') Tambah Rekam Medis @endsection

@section('main-content')
<form action="/admin/rekam-medis/create" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label>ID Pasien</label>
        <!-- <input name="id_dokter" type="text" class="form-control" placeholder="ID Dokter" required> -->
        <select name="user_id" class="form-control">
           <option>...</option>
           @foreach($user as $users)
           <option>{{$users->id}}</option>
           @endforeach
       </select>
   </div>
   <div class="form-group">
    <label>Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal">
</div>
<div class="form-group">
    <label>Usia</label>
    <input name="usia" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="usia">
</div>
<div class="form-group">
    <label>Anamnesa Pemeriksaan Fisik Perawat</label>
    <input name="anamnesa_pemeriksaan_fisik_perawat" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="anamnesa_pemeriksaan_fisik">
</div>
<div class="form-group">
    <label>Anamnesa Pemeriksaan Dokter</label>
    <input name="anamnesa_pemeriksaan_dokter" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="anamnesa_pemeriksaan">
</div>
<div class="form-group">
    <label>Dokter</label>
    <input name="dokter" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dokter">
</div>
<div class="form-group">
    <label>Tinggi Badan</label>
    <input name="tinggi_badan" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tinggi_badan">
</div>
<div class="form-group">
    <label>Sistole</label>
    <input name="sistole" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sistole">
</div>
<div class="form-group">
    <label>Diastole</label>
    <input name="diastole" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="diastole">
</div>
<div class="form-group">
    <label>Respirasi</label>
    <input name="respirasi" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="respirasi">
</div>
<div class="form-group">
    <label>Nadi</label>
    <input name="nadi" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nadi">
</div>
<div class="form-group">
    <label>Obat</label>
    <input name="apoteker" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="apoteker">
</div>
<div class="form-group">
    <label>Perawat</label>
    <input name="perawat" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="perawat">
</div>
<div class="form-group">
    <label>Berat Badan</label>
    <input name="berat_badan" type="float" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan">
</div>
<div class="form-group">
    <label>Tekanan Darah</label>
    <input name="tekanan_darah" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tekanan Darah">
</div>
<div class="form-group">
    <label>Keluhan</label>
    <textarea name="keluhan" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="form-group">
    <label>Diagnosis</label>
    <textarea name="diagnosis" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
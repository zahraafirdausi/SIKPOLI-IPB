@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Rekam Medis @endsection

@section('main-content')
<form action="/admin/rekam-medis-edit/{{$rekam_medis->id}}/update" method="POST">
<!--START EDIT-->
	{{csrf_field()}}
	<div>
		<label><h4>Tanggal</h4></label>
		<input name="tanggal" type="text" class="form-control" placeholder="Tanggal" value="{{$rekam_medis->tanggal}}">
		<br>
		<label><h4>Usia</h4></label>
		<input name="usia" type="text" class="form-control" placeholder="Usia" value="{{$rekam_medis->usia}}">
		<br>
		<label><h4>Keluhan</h4></label>
		<input name="keluhan" type="text" class="form-control" placeholder="Keluhan" value="{{$rekam_medis->keluhan}}">
		<br>
		<label><h4>Anamnesa Pemeriksaan Fisik Perawat</h4></label>
		<input name="anamnesa_pemeriksaan_fisik_perawat" type="text" class="form-control" placeholder="Anamnesa Pemeriksaan Fisik Perawat" value="{{$rekam_medis->anamnesa_pemeriksaan_fisik_perawat}}">
		<br>
		<label><h4>Anamnesa Pemeriksaan Dokter</h4></label>
		<input name="anamnesa_pemeriksaan_dokter" type="text" class="form-control" placeholder="Anamnesa Pemeriksaan Dokter" value="{{$rekam_medis->anamnesa_pemeriksaan_dokter}}">
		<br>
		<label><h4>Tinggi Badan</h4></label>
		<input name="tinggi_badan" type="text" class="form-control" placeholder="Tinggi Badan" value="{{$rekam_medis->tinggi_badan}}">
		<br>
		<label><h4>Berat Badan</h4></label>
		<input name="berat_badan" type="text" class="form-control" placeholder="Berat Badan" value="{{$rekam_medis->berat_badan}}">
		<br>
		<label><h4>Sistole</h4></label>
		<input name="sistole" type="text" class="form-control" placeholder="Sistole" value="{{$rekam_medis->sistole}}">
		<br>
		<label><h4>Diastole</h4></label>
		<input name="diastole" type="text" class="form-control" placeholder="Diastole" value="{{$rekam_medis->diastole}}">
		<br>
		<label><h4>Respirasi</h4></label>
		<input name="respirasi" type="text" class="form-control" placeholder="Respirasi" value="{{$rekam_medis->respirasi}}">
		<br>
		<label><h4>Nadi</h4></label>
		<input name="nadi" type="text" class="form-control" placeholder="Nadi" value="{{$rekam_medis->nadi}}">
		<br>
		<label><h4>Diagnosa</h4></label>
		<input name="diagnosis" type="text" class="form-control" placeholder="Diagnosa" value="{{$rekam_medis->diagnosis}}">
		<br>
		<label><h4>Dokter</h4></label>
		<input name="dokter" type="text" class="form-control" placeholder="Dokter" value="{{$rekam_medis->dokter}}">
		<br>
		<label><h4>Perawat</h4></label>
		<input name="perawat" type="text" class="form-control" placeholder="Perawat" value="{{$rekam_medis->perawat}}">
		<br>
		<label><h4>Apoteker</h4></label>
		<input name="apoteker" type="text" class="form-control" placeholder="Apoteker" value="{{$rekam_medis->apoteker}}">
	</div>	
	<div class="modal-footer">
		<button type="submit" class="btn btn-warning">Update</button>
	</div>
	<!--END EDIT-->
</form>
@endsection
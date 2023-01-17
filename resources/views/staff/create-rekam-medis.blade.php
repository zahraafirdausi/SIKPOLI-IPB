@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('active-rm-2') active @endsection

@section('title-content') Tambah Rekam Medis @endsection

@section('main-content')
<form action="/admin/rekam-medis/create" method="POST">
	{{csrf_field()}}
	<!-- INPUTS -->
	<div>
		<label><h4>ID Dokter</h4></label>
		<!-- <input name="id_dokter" type="text" class="form-control" placeholder="ID Dokter" required> -->
		<select name="id_dokter" class="form-control">
			<option>...</option>
			@foreach($dokter as $dr)
			<option>{{$dr->id}}</option>
			@endforeach
		</select>
		<br>

<div>
	<label><h4>Tanggal</h4></label>
	<input type="text" class="form-control" placeholder="Tanggal">
	<br>
	<label><h4>Usia</h4></label>
	<input type="text" class="form-control" placeholder="Usia">
	<br>
	<label><h4>Keluhan</h4></label>
	<input type="text" class="form-control" placeholder="Keluhan">
	<br>
	<label><h4>Anamnesa Pemeriksaan Fisik Perawat</h4></label>
	<input type="text" class="form-control" placeholder="Anamnesa Pemeriksaan Fisik Perawat">
	<br>
	<label><h4>Anamnesa Pemeriksaan Dokter</h4></label>
	<input type="text" class="form-control" placeholder="Anamnesa Pemeriksaan Dokter">
	<br>
	<label><h4>Tinggi Badan</h4></label>
	<input type="text" class="form-control" placeholder="Tinggi Badan">
	<br>
	<label><h4>Berat Badan</h4></label>
	<input type="text" class="form-control" placeholder="Berat Badan">
	<br>
	<label><h4>Sistole</h4></label>
	<input type="text" class="form-control" placeholder="Tinggi Badan">
	<br>
	<label><h4>Diastole</h4></label>
	<input type="text" class="form-control" placeholder="Diastole">
	<br>
	<label><h4>Respirasi</h4></label>
	<input type="text" class="form-control" placeholder="Respirasi">
	<br>
	<label><h4>Nadi</h4></label>
	<input type="text" class="form-control" placeholder="Nadi">
	<br>
	<label><h4>Diagnosa</h4></label>
	<input type="text" class="form-control" placeholder="Diagnosa">
	<br>
	<label><h4>Dokter</h4></label>
	<input type="text" class="form-control" placeholder="Dokter">
	<br>
	<label><h4>Perawat</h4></label>
	<input type="text" class="form-control" placeholder="Perawat">
	<br>
	<label><h4>Apoteker</h4></label>
	<input type="text" class="form-control" placeholder="Apoteker">
</div>	
<div class="modal-footer">
	<button type="button" class="btn btn-primary">Simpan</button>
</div>
</form>
@endsection
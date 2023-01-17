@extends('staff.master-staff')

@section('active-jd') active @endsection

@section('title-content') Jadwal Dokter @endsection

@section('subtitle-content') Poliklinik IPB @endsection

@section('main-content')
<form action="/admin/jadwal-dokter/create" method="POST">
	{{csrf_field()}}
	<!-- INPUTS -->
	<div>
		<label><h4>ID Dokter</h4></label>
		<!-- <input name="id_dokter" type="text" class="form-control" placeholder="ID Dokter" required> -->
		<select name="id_dokter" class="form-control">
			<option>...</option>
			@foreach($dokter as $dr)
			<option  >{{$dr->id}}</option> 
			@endforeach
		</select>
		<br>
		<label><h4>Jadwal</h4></label>
		<p>Senin</p>
		<select name="senin" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Selasa</p>
		<select name="selasa" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Rabu</p>
		<select name="rabu" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Kamis</p>
		<select name="kamis" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Jumat</p>
		<select name="jumat" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
		</select>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>


@endsection
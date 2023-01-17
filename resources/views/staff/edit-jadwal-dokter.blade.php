@extends('staff.master-staff')

@section('active-jd') active @endsection

@section('title-content') Jadwal Dokter @endsection

@section('subtitle-content') Poliklinik IPB @endsection

@section('main-content')
<form action="/admin/jadwal-dokter/{{$edit_jadwal->id}}/update" method="POST">
	{{csrf_field()}}
	<!-- INPUTS -->
	<div>
		<label><h4>Nama Dokter</h4></label>
		<input type="text" readonly class="form-control" placeholder="Nama Dokter" value="{{$edit_jadwal->dokter_users->name}}">
		<br>
		<label><h4>Poli</h4></label>
		<input type="text" readonly class="form-control" placeholder="Poli" value="{{$edit_jadwal->dokter_users->poli}}">
		<br>
		<label><h4>Jadwal</h4></label>
		<p>Senin</p>
		<select name="senin" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB" @if($edit_jadwal->senin =='08.00 - 10.00 WIB') selected @endif>08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB" @if($edit_jadwal->senin =='10.00 - 12.00 WIB') selected @endif>10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB" @if($edit_jadwal->senin =='12.00 - 14.00 WIB') selected @endif>12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB" @if($edit_jadwal->senin =='14.00 - 16.00 WIB') selected @endif>14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Selasa</p>
		<select name="selasa" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB" @if($edit_jadwal->selasa =='08.00 - 10.00 WIB') selected @endif>08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB" @if($edit_jadwal->selasa =='10.00 - 12.00 WIB') selected @endif>10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB" @if($edit_jadwal->selasa =='12.00 - 14.00 WIB') selected @endif>12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB" @if($edit_jadwal->selasa =='14.00 - 16.00 WIB') selected @endif>14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Rabu</p>
		<select name="rabu" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB" @if($edit_jadwal->rabu =='08.00 - 10.00 WIB') selected @endif>08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB" @if($edit_jadwal->rabu =='10.00 - 12.00 WIB') selected @endif>10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB" @if($edit_jadwal->rabu =='12.00 - 14.00 WIB') selected @endif>12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB" @if($edit_jadwal->rabu =='14.00 - 16.00 WIB') selected @endif>14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Kamis</p>
		<select name="kamis" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB" @if($edit_jadwal->kamis =='08.00 - 10.00 WIB') selected @endif>08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB" @if($edit_jadwal->kamis =='10.00 - 12.00 WIB') selected @endif>10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB" @if($edit_jadwal->kamis =='12.00 - 14.00 WIB') selected @endif>12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB" @if($edit_jadwal->kamis =='14.00 - 16.00 WIB') selected @endif>14.00 - 16.00 WIB</option>
		</select>
		<br>
		<p>Jumat</p>
		<select name="jumat" class="form-control">
			<option value="-">-</option>
			<option value="08.00 - 10.00 WIB" @if($edit_jadwal->jumat =='08.00 - 10.00 WIB') selected @endif>08.00 - 10.00 WIB</option>
			<option value="10.00 - 12.00 WIB" @if($edit_jadwal->jumat =='10.00 - 12.00 WIB') selected @endif>10.00 - 12.00 WIB</option>
			<option value="12.00 - 14.00 WIB" @if($edit_jadwal->jumat =='12.00 - 14.00 WIB') selected @endif>12.00 - 14.00 WIB</option>
			<option value="14.00 - 16.00 WIB" @if($edit_jadwal->jumat =='14.00 - 16.00 WIB') selected @endif>14.00 - 16.00 WIB</option>
		</select>
	</div>	
	<div class="modal-footer">
		<button type="submit" class="btn btn-warning">Update</button>
	</div>
</form>
@endsection
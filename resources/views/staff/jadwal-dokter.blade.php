@extends('staff.master-staff')

@section('active-jd') active @endsection

@section('title-content') Jadwal Dokter 
<form class="navbar panel-body" style="width: 40%; float: right;">
	<div class="input-group">
		<input type="text" value="" class="form-control" placeholder="Cari Dokter">
		<span class="input-group-btn"><a type="button" class="btn btn-primary">Cari</a></span>
	</div>
</form>
@endsection

@section('subtitle-content') Poliklinik IPB @endsection

@section('main-content')
@if(session('sukses'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<i class="fa fa-check-circle"></i> {{session('sukses')}}
</div>
@endif
<a href="{{url('/admin/jadwal-dokter/tambah')}}" class="btn btn-default" type="button"><i class="fa fa-plus-square"></i> Tambah </a>
<!--START TABLE-->
<table class="table table-condensed">
	<thead>
		<tr>
			<th width="25%" class="text-center">Nama</th>
			<th width="30%" class="text-center">Poli</th>
			<th colspan="2" width="25%" class="text-center">Jadwal</th>
			<th width="20%" class="text-center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<!--START ONE ROW-->
		@foreach($jadwal_dokter as $jd)
		<tr class="text-center">
			<td rowspan="5">{{$jd->dokter_users->name}}</td>
			<td rowspan="5">{{$jd->dokter_users->poli}}</td>
			<td class="padding-left5">Senin</td>
			<td class="padding-left5">{{$jd->senin}}</td>
			<td rowspan="5">
				<!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</button> -->
				<a href="/admin/jadwal-dokter/{{$jd->id}}/edit" type="button" class="btn btn-warning">Edit</a>
				<a href="/admin/jadwal-dokter/{{$jd->id}}/delete" type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
			</td>
		</tr>
		<tr>
			<td class="padding-left5">Selasa</td>
			<td class="padding-left5">{{$jd->selasa}}</td>
		</tr>
		<tr>
			<td class="padding-left5">Rabu</td>
			<td class="padding-left5">{{$jd->rabu}}</td>
		</tr>
		<tr>
			<td class="padding-left5">Kamis</td>
			<td class="padding-left5">{{$jd->kamis}}</td>
		</tr	>
		<tr>
			<td class="padding-left5">Jumat</td>
			<td class="padding-left5">{{$jd->jumat}}</td>
		</tr>
		@endforeach
		<!--STOP ONE ROW-->
	</tbody>
</table>
<!-- END TABLE-->

<!--Tambah-->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h3>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
<</div> -->
<!--END Tambah-->
@endsection
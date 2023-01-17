@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Daftar Rekam Medis
<form class="navbar panel-body" style="width: 40%; float: right;">
	<div class="input-group">
		<input type="text" value="" class="form-control" placeholder="Cari Mahasiswa">
		<span class="input-group-btn"><a href="#" type="button" class="btn btn-primary">Cari</a></span>
	</div>
</form>
@endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')

@if(session('sukses'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<i class="fa fa-check-circle"></i> {{session('sukses')}}
</div>
@endif
<a href="{{url('/admin/rekam-medis-tambah')}}" class="btn btn-default" type="button"><i class="fa fa-plus-square"></i> Tambah </a>

<!-- DAFTAR REKAM MEDIS MAHASISWA -->
<div class="panel-body no-padding">
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="20%">ID</th>
				<th width="25%" style="text-align: left;">Nama</th>
				<th class="text-center">NIM</th>
				<th class="text-center">Umur</th>
				<th class="text-center">Jenis Kelamin</th>
				<th class="text-center">Status BPJS</th>
				<th style="text-align: left;">Rekam Medis</th>
			</tr>
		</thead>
		<tbody>
		@foreach($daftar_user as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td style="text-align: left;">{{$user->name}}</td>
				<td>{{$user->nim}}</td>
				<td>{{$user->umur}}</td>
				<td>{{$user->jenis_kelamin}}</td>
				<td><span class="label label-success">TERDAFTAR</span></td>
				<!--<td><a href="/admin/rekam-medis/individu/{{$user->id}}" class="btn btn-warning btn-sm">lihat</a></td>-->
				<form action="/admin/rekam-medis/individu/{{$user->id}}">
				<td><div class="col-md-6 text-center"><button type="submit" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></div></td>
				</form>
			
				<!--
				<td><div class="col-md-6 text-center"><a href="/admin/rekam-medis/individu/{{$user->id}}" class="btn btn-info btn-sm" method="GET"><span class="fa fa-search" ></span></a></div></td>
			!-->
			</tr>
		@endforeach
			<!--
			<tr>
				<td>002</td>
				<td style="text-align: left;">Jobs</td>
				<td>763648</td>
				<td>76</td>
				<td>Pria</td>
				<td><span class="label label-danger">BELUM TERDAFTAR</span></td>
				<td><div class="col-md-6 text-center"><a href="#" class="btn btn-info btn-sm"><span class="fa fa-search" ></span></a></div></td>
			</tr>
			!-->
		</tbody>
	</table>
</div>
<!-- END REKAM MEDIS MAHASISWA -->
@endsection
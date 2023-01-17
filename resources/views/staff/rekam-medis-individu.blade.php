@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('title-content') Rekam Medis @endsection

@section('subtitle-content') Mahasiswa @endsection

@section('main-content')
@if(session('sukses'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<i class="fa fa-check-circle"></i> {{session('sukses')}}
</div>
@endif
<!-- REKAM MEDIS -->
<div class="">
	<!-- TABBED CONTENT -->
	<div class="custom-tabs-line tabs-line-bottom left-aligned">
		<ul class="nav" role="tablist">
			<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Hasil Periksa</a></li>
			<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Riwayat Penyakit</a></li>
		</ul>
	</div>
	<!--Hasil Periksa-->
	<div class="tab-content">
		<div class="tab-pane fade in active" id="tab-bottom-left1">
			<div class="panel-body no-padding">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Keluhan</th>
							<th>Dokter</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($rekammedis as $rekammedises)
						<tr>
							<td>{{$rekammedises->tanggal}}</td>
							<td>{{$rekammedises->keluhan}}</td>
							<td>{{$rekammedises->dokter}}</td>
							<td>
								<a href="/admin/rekam-medis-edit/{{$rekammedises->id}}" type="button" class="btn btn-warning btn-xs">Edit</a>	
								<!-- <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#exampleModal">Edit</button> -->
								<a href="/admin/rekam-medis-delete/{{$rekammedises->id}}" type="button" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus rekam medis ini?')">Hapus</a>
								<a href="/admin/rekam-medis-detail/{{$rekammedises->id}}" type="button" class="btn btn-primary btn-xs">Lihat</a>									
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- Riwayat Penyakit -->
		<div class="tab-pane fade" id="tab-bottom-left2">
			<div class="panel-body no-padding">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Penyakit</th>
							<th>Tahun</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Cantengan</td>
							<td>2015</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">Tambah</a></div>
		</div>
		<!--Riwayat Penyakit-->
	</div>
</div>
<!--Riwayat Penyakit-->
</div>
<!-- END TABBED CONTENT -->
</div>
<!-- END REKAM MEDIS -->
</div>
</div>
@endsection
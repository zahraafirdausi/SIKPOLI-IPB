@extends('staff.master-staff')

@section('active-rm-1') active @endsection

@section('content')
<div class="row">
	<div class="col-md-7">
		<!-- PANEL HEADLINE -->
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Samuel Gold</h3>
				<p class="panel-subtitle">Data Diri</p>
			</div>
			<div class="panel-body">
				<!-- PROFILE DETAIL -->
				<div class="col-md-4">
					<img src="{{asset('assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
				</div>
				<div class="col-md-6">
					<div class="profile-detail" style="padding-bottom: 0px !important;">
						<ul class="list-unstyled list-justify">
							<ul class="list-unstyled list-justify">
								<li>NIM <span>{{$rekam_medis->userid->nim}}</span></li>
								<li>Asal Daerah <span>{{$rekam_medis->userid->alamat}}</span></li>
								<li>Umur <span>{{$rekam_medis->userid->umur}} Tahun</span></li>
								<li>Jenis Kelamin <span>{{$rekam_medis->userid->jenis_kelamin}}</span></li>
							</ul>
						</ul>
					</div>
				</div>
				<!-- END PROFILE DETAIL -->
			</div>
		</div>
		<!-- END PANEL HEADLINE -->
	</div>
	<div class="col-md-5">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Penyakit</h3>
			</div>
			<div class="panel-body">
				<!-- TABLE STRIPED -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Steve</td>
							<td>Jobs</td>
							<td>@steve</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Simon</td>
							<td>Philips</td>
							<td>@simon</td>
						</tr>
					</tbody>
				</table>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>
</div>
@endsection

@section('title-content') Hasil Periksa @endsection

@section('subtitle-content') {{$rekam_medis->tanggal}} @endsection

@section('main-content')
<!-- TABLE STRIPED -->
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="40%">Indikator</th>
			<th width="">Hasil</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td style="text-align: left;">Keluhan</td>
			<td style="text-align: left;">{{$rekam_medis->keluhan}}</td>
		</tr>
		<tr>
			<td>2</td>
			<td style="text-align: left;">Anamnesa Pemeriksaan Fisik Perawat</td>
			<td style="text-align: left;">{{$rekam_medis->anamnesa_pemeriksaan_fisik_perawat}}</td>
		</tr>
		<tr>
			<td>3</td>
			<td style="text-align: left;">Anamnesa Pemeriksaan Dokter</td>
			<td style="text-align: left;">{{$rekam_medis->anamnesa_pemeriksaan_dokter}}</td>
		</tr>
		<tr>
			<td>4</td>
			<td style="text-align: left;">Tinggi Badan</td>
			<td style="text-align: left;">{{$rekam_medis->tinggi_badan}} cm</td>
		</tr>
		<tr>
			<td>5</td>
			<td style="text-align: left;">Berat Badan</td>
			<td style="text-align: left;">{{$rekam_medis->berat_badan}} Kg</td>
		</tr>
		<tr>
			<td>6</td>
			<td style="text-align: left;">Sistole</td>
			<td style="text-align: left;">{{$rekam_medis->sistole}} mmHg</td>
		</tr>
		<tr>
			<td>7</td>
			<td style="text-align: left;">Diastole</td>
			<td style="text-align: left;">{{$rekam_medis->diastole}} mmHg</td>
		</tr>
		<tr>
			<td>8</td>
			<td style="text-align: left;">Respirasi</td>
			<td style="text-align: left;">{{$rekam_medis->respirasi}} spm</td>
		</tr>
		<tr>
			<td>9</td>
			<td style="text-align: left;">Nadi</td>
			<td style="text-align: left;">{{$rekam_medis->nadi}} bpm</td>
		</tr>
		<tr>
			<td>10</td>
			<td style="text-align: left;">Diagnosa</td>
			<td style="text-align: left;">{{$rekam_medis->diagnosis}}</td>
		</tr>
		<tr>
			<td>11</td>
			<td style="text-align: left;">Dokter</td>
			<td style="text-align: left;">{{$rekam_medis->dokter}}</td>
		</tr>
		<tr>
			<td>12</td>
			<td style="text-align: left;">Perawat</td>
			<td style="text-align: left;">{{$rekam_medis->perawat}}</td>
		</tr>
		<tr>
			<td>13</td>
			<td style="text-align: left;">Obat</td>
			<td style="text-align: left;">{{$rekam_medis->apoteker}}</td>
		</tr>
	</tbody>
</table>
<!-- END TABLE STRIPED -->
@endsection
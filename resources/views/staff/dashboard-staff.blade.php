@extends('staff.master-staff')

@section('active-d') active @endsection

@section('title-content') Dashboard @endsection

@section('main-content')
<!-- OVERVIEW -->
<div class="col-md-3">
	<div class="metric">
		<span class="icon"><i class="fa fa-download"></i></span>
		<p>
			<span class="number">1,252</span>
			<span class="title">Downloads</span>
		</p>
	</div>
</div>
<div class="col-md-3">
	<div class="metric">
		<span class="icon"><i class="fa fa-shopping-bag"></i></span>
		<p>
			<span class="number">203</span>
			<span class="title">Sales</span>
		</p>
	</div>
</div>
<div class="col-md-3">
	<div class="metric">
		<span class="icon"><i class="fa fa-eye"></i></span>
		<p>
			<span class="number">274,678</span>
			<span class="title">Visits</span>
		</p>
	</div>
</div>
<div class="col-md-3">
	<div class="metric">
		<span class="icon"><i class="fa fa-bar-chart"></i></span>
		<p>
			<span class="number">35%</span>
			<span class="title">Conversions</span>
		</p>
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-9">
		<div id="headline-chart" class="ct-chart"></div>
	</div>
	<div class="col-md-3">
		<div class="weekly-summary text-right">
			<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
			<span class="info-label">Total Sales</span>
		</div>
		<div class="weekly-summary text-right">
			<span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
			<span class="info-label">Monthly Income</span>
		</div>
		<div class="weekly-summary text-right">
			<span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
			<span class="info-label">Total Income</span>
		</div>
	</div>
<!-- END OVERVIEW -->
@endsection
<!doctype html>
<html lang="en">

<head>
	<title>SIK-POLI IPB</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x96" href="{{asset('images/logo-ipb.png')}}">
	<link rel="icon" type="image/png" sizes="76x96" href="{{asset('images/logo-ipb.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="padding: 14px 0px 14px 15px;">
				<a href="{{url('/staff/dashboard')}}"><img src="{{asset('images/ipbsikpoliipb-biru.png')}}" alt="SIKPOLI Logo" width="70%"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{ Auth::guard('admin')->user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="lnr lnr-exit" ></i> <span>{{ __('Logout') }}</span></a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('/admin/dashboard')}}" class="@yield('active-d')"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{url('/admin/jadwal-dokter')}}" class="@yield('active-jd')"><i class="fa fa-calendar"></i> <span>Jadwal Dokter</span></a></li>
						<li>
							<a href="{{url('/admin/rekam-medis')}}" class="@yield('active-rm-1')"><i class="lnr lnr-file-empty"></i> <span>Rekam Medis</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">					
					@yield('content')
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">@yield('title-content')</h3>
							<p class="panel-subtitle">@yield('subtitle-content')</p>
						</div>
						<div class="panel-body">
							@yield('main-content')
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 <a href="https://www.ipb.ac.id" target="_blank">SIK-POLI</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('assets/scripts/klorofil-common.js')}}"></script>
	
	@stack('script')

</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<!--
<body>
        <section>
            <div id="wrapper">
                <div id="header">
                    
                    <div id="main-header">
                        <div class="main-container">
                            <div id="logo">
                                <span id="logo-name">SIK-POLI IPB</span>
                            </div>
                            <div id="user-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Rekam Medis</a></li>
                                <li><a href="{{url('jadwal_dokter')}}">Jadwal Dokter</a></li>
                                <li><a href="#">Konsultasi</a></li>
                            </div>  
                            <div id="profile-section">
                                <div class="profile-name">
                                    @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </div>
          
        </section>
        
        <script src="js/index.js"></script>
    </body>
-->

<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="{{url('/images/logo-ipb.png')}}"/>        
            <div class="navbar-brand">
                <a>SIK-POLI IPB</a>
            </div>
         
            <button class="navbar-toggler rounded " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
  

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link rounded" href="{{url('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link rounded" href="/rekam-medis/{{ Auth::user()->id }}">Rekam Medis</a></li>
                    <li class="nav-item"><a class="nav-link rounded" href="{{url('jadwal-dokter')}}">Jadwal Dokter</a></li>                   
                    <li class="nav-item"><a class="nav-link rounded" href="{{url('konsultasi')}}">Konsultasi</a></li>
                    <!--
                    <buttton class="profile-name" type="button" data-toggle="modal" data-target="#contohModal">
                       <a href="#login">{{ Auth::user()->name }}</a>    
                    </buttton>
                    -->
                    
                    <li class ="nav-item">
                        <div class="collapsible" type="button" data-toggle="collapse" data-target="#logout" aria-expanded="false" aria-controls="collapseExample">
                                <a style = "color: white;">{{ Auth::user()->name }}<!--<span class="fas fa-bars"></span>--></a>
                        </div>
                        <div class="collapse" id="logout">
                                <div class="content segitiga">
                                
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                        <span  class="fa fa-sign-out"></span>{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                    </form>
                                </div>
                        </div>
                    </li>
                </ul>
            </div>
                
            
        </div>
        </nav>
        <!--
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
        <div id="wrapper">
                <div id="header">
                    
                    <div id="main-header">
            
                        <div class="main-container">
                            <div id="logo">
                                <span id="logo-name">SIK-POLI IPB</span>
                            </div>
                            <div id="user-menu">
                                <li><a href=>Home</a></li>
                                <li><a href="#">Rekam Medis</a></li>
                                <li><a href="{{url('jadwal_dokter')}}">Jadwal Dokter</a></li>
                                <li><a href="{{url('konsultasi')}}">Konsultasi</a></li>
                            </div>  
                            <div id="profile-section">
                                <div class="profile-name">
                                    @guest
                                
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </nav>
-->

       <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    
                        <button>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                    </button>
                    
                    
                
            </div>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
        $("a .nav-link .rounded").click(function () {
            $(this).addClass("active");
            $("a .nav-link .rounded").not(this).removeClass("active");
        });

        });
    </script>
</body>

</html>

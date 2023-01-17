<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>::SIK-POLI IPB::</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        
    </head>

    <body style = "background-image:url(./images/bg.png);
    background-color: #1F076C;">
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

                                    <a href="#">HALO, Diza!</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div id="footer">
                    
                    <div id="main-footer">
                        <div id="rekam-medis">
                            <div>
                            </div>
                        </div>
                        <div id="jadwal-dokter">
                            
                        </div>  
                        <div id="konsultasi">
                                
                        </div> 
                    </div>
                </div>
            </div>
          
        </section>
        
        <script src="js/index.js"></script>
    </body>
</html>
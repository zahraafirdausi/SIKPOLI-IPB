<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>::SIK-POLI IPB::</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
       
    </head>
    <body style = "background-image:url(./images/LOGIN.png);
    background-size: cover;">
        <section>
            <div class="sikpoli-container">
                <a class="login-logo" href="">
                    <img src="./images/ipbsikpoliipb.png">
                </a>
                <h1>Sistem Informasi</h1>
                <h1>Rekam Medis dan Konsultasi</h1>
                <h1>Poliklinik IPB</h1>
            </div>
            <div class="form-container">
                <h1>LOGIN SIK-POLI</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="control">
                        <label for="email">ID Pengguna</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="control">
                        <label for="password">Kata Sandi</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    
                    <button type="submit">
                        Login
                    </button>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>

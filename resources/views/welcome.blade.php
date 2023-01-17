<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>::SIK-POLI IPB::</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    

    <style>
    .mydivouter{
      position:relative;
      background: rgba(0, 0, 0, 0.0);
        width: 200px;
        height: 76px;
        margin: 0 auto;
    }
    .mydivoverlap{
        position: relative;
        z-index: 1;
    }
    .mybuttonoverlap{
      position: relative;
        z-index: 2;
        top: 0px;
        display: none;
        left: 0px;	
    }
    .mydivouter:hover .mybuttonoverlap{ 
      display:block;
    }
    </style>
    <body style = "background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./images/LOGIN.png);
    background-size: cover;">
        <section>
            <div class="welcome-container">
              <h1>Selamat Datang</h1>
              <p>Sistem Informasi Rekam Medis dan Konsultasi Poliklinik IPB</p>
              <form action="{{url('login-mahasiswa')}}">
                <button type="submit">Login</button>
              </form>
              
              <div class="mydivouter">	
                <a href="{{url('login/admin')}}" class="mybuttonoverlap btn btn-info">Login Admin</a>
                <a href="{{url('login/dokter')}}" class="mybuttonoverlap btn btn-info">Login Dokter</a>
              </div>
              
              
            </div>

        </section>
        <script src="js/index.js"></script>
    </body>
</html>

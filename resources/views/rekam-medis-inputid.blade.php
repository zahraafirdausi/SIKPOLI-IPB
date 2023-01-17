<!DOCTYPE html>
<head>
    <title>::Rekam Medis::</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <script src="js/bootstrap.min.js"></script>
</head>

@extends('layouts.master')
<body class="bg-purple">
    <div class="page-section">
        <div class="container">
            <div class="rekmed">
                <div class="box-inputid" style="
                position: absolute;
                top: 40%;
                left: 50%;
                width: 400px;
                transform: translate(-50%, -50%);
                ">
                    <h1 style="
                    margin: 0 0 10px;
                    padding: 0;
                    color: #EC9353;
                    font-weight: bold;
                    font-size: 24px;
                    ">Input ID Pasien</h1>
                    <form action="">
                        <input type="text" name="" placeholder="ID Pasien..." style="
                        backround: white;
                        width: 300px;
                        height: 50px;
                        border: none;
                        outline: none;
                        padding: 0 16px;
                        border-radius: 16px 0px 0px 16px;
                        ">
                        <button class="btn" type="submit" style="
                        position: relative;
                        bottom: 1px;
                        left: -4px;
                        height: 50px;
                        outline: none;
                        border: none;
                        padding: 0 38px;
                        background: #EC9353;
                        border-radius: 0px 16px 16px 0px;
                        color: white;
                        ">
                            <i class="fa fa-user-circle-o"> </i>
                        </button>
                    </form>
                </div>    
            </div>  
        </div>
    </div>
    <script>
        function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("hasil-periksa");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" tab-active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " tab-active";
        }
    </script>
    </body>
</html>


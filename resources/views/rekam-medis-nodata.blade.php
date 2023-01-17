<!DOCTYPE html>
<head>
    <title>::Rekam Medis::</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="js/bootstrap.min.js"></script>
</head>

@extends('layouts.master')
<body class="bg-purple">
    <div class="page-section bg-purple">
        <div class="container">
            <div class="rekmed">
                <div class="box-rekmed">
                    <div class="kolom-profil">
                        <div class="card-profil"> 
                            <div class="foto-profil">
                            <img src="{{url('/images/profil-2.png')}}"/>   
                            </div>
                            <div class="main-inf">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->id_pasien }}</p>
                            </div>
                            <div class="kotak-dua">
                                <div class="kotak-dalam float-left">
                                    <h5>Gender</h5>
                                    <p>Perempuan</p>
                                </div>
                                <div class="kotak-dalam float-right">
                                    <h5>Umur</h5>
                                    <p>{{ Auth::user()->jenis_kelamin }}</p>
                                </div>
                            </div>
                            <div class="kotak-info">
                                <div class="info-pasien">
                                    <h5>No. BPJS</h5>
                                    <p>{{ Auth::user()->no_bpjs }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Golongan Darah</h5>
                                    <p>{{ Auth::user()->goldar }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Fakultas/Departemen</h5>
                                    <p>{{ Auth::user()->fakultas }} / {{ Auth::user()->mayor }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Alamat</h5>
                                    <p>{{ Auth::user()->alamat }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>No. HP</h5>
                                    <p>{{ Auth::user()->no_hp }}</p>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="kolom-rekmed">
                        <div class="card-nodata">
                            <img src="{{url('/images/nodata.png')}}"/> 
                            <h5>Data Rekam Medis Belum Ada</h5> 
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    </body>
</html>


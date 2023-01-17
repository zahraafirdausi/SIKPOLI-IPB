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
                <div class="box-rekmed">
                    <div class="kolom-profil">
                        <div class="card-profil"> 
                            <div class="foto-profil">
                            <img src="{{url('/images/profil-2.png')}}"/>   
                            </div>
                            <div class="main-inf">
                                <h5>Sabrina Diza</h5>
                                <p>ID Pasien 2456772837</p>
                            </div>
                            <div class="kotak-dua">
                                <div class="kotak-dalam float-left">
                                    <h5>Jenis Kelamin</h5>
                                    <p>Perempuan</p>
                                </div>
                                <div class="kotak-dalam float-right">
                                    <h5>Umur</h5>
                                    <p>30 tahun</p>
                                </div>
                            </div>
                            <div class="kotak-info">
                                <div class="info-pasien">
                                    <h5>No. BPJS</h5>
                                    <p>12439847329847</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Golongan Darah</h5>
                                    <p>A</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Fakultas/Departemen</h5>
                                    <p>FMIPA/Ilmu Komputer</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Alamat</h5>
                                    <p>Jln. Bara Tengah No. 22</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>No. HP</h5>
                                    <p>085213223696</p>
                                </div>
                            </div>    
                        </div>
                    </div>

                    <div class="kolom-rekmed">
                        <div class="card-rekmeds">
                            <div class="tab-rekmed">
                                <button class="tab-button margin-left-0 tablink tab-active" onclick="openCity(event,'Hasil Periksa')">Hasil Periksa</button>
                            </div>
                            <div id="Hasil Periksa" class="hasil-periksa">
                                <div id="rekammedis">
                                    <div class="row">
                                        <h1>Edit Rekam Medis</h1>
                                        <form action="/rekam-medis/{{$rekammedis->id}}/update" method="POST">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ID Pasien</label>
                                                <input name="id_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Pasien" value="{{$rekammedis->id_pasien}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Berat Badan</label>
                                                <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan" value="{{$rekammedis->berat_badan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tekanan Darah</label>
                                                <input name="tekanan_darah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tekanan Darah" value="{{$rekammedis->tekanan_darah}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Keluhan</label>
                                                <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$rekammedis->keluhan}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Diagnosis</label>
                                                <textarea name="diagnosis" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$rekammedis->diagnosis}}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                         </form>
                                        
                                    </div>
                                </div>
                            </div>                           
                        </div>                   
                    </div>
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


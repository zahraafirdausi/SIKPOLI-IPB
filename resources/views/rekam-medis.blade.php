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
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->id_pasien }}</p>
                            </div>
                            <div class="kotak-dua">
                                <div class="kotak-dalam float-left">
                                    <h5>Jenis Kelamin</h5>
                                    <p>{{ Auth::user()->jenis_kelamin }}</p>
                                </div>
                                <div class="kotak-dalam float-right">
                                    <h5>Umur</h5>
                                    <p>{{ Auth::user()->umur }}</p>
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
                        <div class="card-rekmeds">
                            <div class="tab-rekmed">
                                <button class="tab-button margin-left-0 tablink tab-active" onclick="openCity(event,'Hasil Periksa')">Hasil Periksa</button>
                                <button class="tab-button tablink" onclick="openCity(event,'Riwayat Penyakit')">Riwayat Penyakit</button>
                            </div>
                            <div id="Hasil Periksa" class="hasil-periksa">
                                <div id="rekammedis">
                                    <div class="row">
                                    
                                        <table class='table'>
                                            <tr>
                                                <th width="20%">Tanggal</th>
                                                <th>Berat Badan</th>
                                                <th>Tekanan Darah</th>
                                                <th>Keluhan</th>
                                                <th>Diagnosis</th>
                                                <th>Aksi</th>
                                            </tr>
                                            @foreach($data_rekammedis as $rekammedis)
                                            <tr>
                                                <td>{{$rekammedis->tanggal}}</td>
                                                <td>{{$rekammedis->berat_badan}}</td>
                                                <td>{{$rekammedis->tekanan_darah}}</td>
                                                <td>{{$rekammedis->keluhan}}</td>
                                                <td>{{$rekammedis->diagnosis}}</td>
                                                <td>
                                                <a href="/rekam-medis/show/{{$rekammedis->id}}" type="button" class="btn btn-primary btn-xs"><span class="fa fa-search" ></span></a>
                                                <!-- <a href="rekam-medis/{{$rekammedis->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="rekam-medis/{{$rekammedis->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus rekam medis ini?')">Delete</a>
                                                -->
                                                </td>                                                
                                            </tr>
                                            @endforeach
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="Riwayat Penyakit" class="hasil-periksa" style="display:none">
                                <div id="rekammedis">
                                    <table>
                                        <tr>
                                            <th width="20%">No</th>
                                            <th width="20%">Penyakit</th>
                                            <th width="20%">Tahun</th>
                                        </tr>    
                                        <tr>
                                            <td>1</td>
                                            <td>Cantengan</td>
                                            <td>2015</td>                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Katarak</td>
                                            <td>2017</td>
                                        </tr>
    
                                    </table>
                                </div>
                            </div> 
                             
                        </div>                   
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/rekam-medis/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pasien</label>
                            <input name="id_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Pasien">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Berat Badan</label>
                            <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tekanan Darah</label>
                            <input name="tekanan_darah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tekanan Darah">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keluhan</label>
                            <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Diagnosis</label>
                            <textarea name="diagnosis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
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


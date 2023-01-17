<!DOCTYPE html><html class=''>
<head>
    <title>::Jadwal Dokter::</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

 @extends('layouts.master')
<body style="background-color: #D8C9FF;">
        <section>
            <div id="wrapper">
                <div id="header">
                    
                    <div id="main-header">
                        
                    </div>
                </div>
            </div>
            
            <div id="tabel-jadwal">
                <details>
                    <summary>Dokter Umum</summary>   
                    <div class="details-content">
                        <table id="tabel-dokter">
                        <tr>
                            <th width='20%'>Dokter</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                        </tr>
                        @foreach($jadwal_dokter as $jd)
                        @if($jd->dokter_users->poli=="poliumum")
                        <tr>
                            <td>{{$jd->dokter_users->name}}</td>
                            <td>{{$jd->senin}}</td>
                            <td>{{$jd->selasa}}</td>
                            <td>{{$jd->rabu}}</td>
                            <td>{{$jd->kamis}}</td>
                            <td>{{$jd->jumat}}</td>
                        </tr>
                        @endif
                        @endforeach
                        </table>
                    </div>
                    
                </details>

                <details>
                    <summary>Poli Gigi</summary>
                    <div class="details-content">
                    <table id="tabel-dokter">
                        <tr>
                            <th width='20%'>Dokter</th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                        </tr>
                        @foreach($jadwal_dokter as $jd)
                        @if($jd->dokter_users->poli=="poligigi")
                        <tr>
                        <td>{{$jd->dokter_users->name}}</td>
                            <td>{{$jd->senin}}</td>
                            <td>{{$jd->selasa}}</td>
                            <td>{{$jd->rabu}}</td>
                            <td>{{$jd->kamis}}</td>
                            <td>{{$jd->jumat}}</td>
                        </tr>
                        @endif
                        @endforeach
                        </table>
                    </div>
                </details>
            </div>
        </section>
        
        <script src="js/index.js"></script>
    </body>
</html>
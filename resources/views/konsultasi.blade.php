<!DOCTYPE html><html class=''>
<head>
    <title>nav</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
@extends('layouts.master')
<!--  
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="{{asset('image/logo-ipb.png')}}">           
            <div class="navbar-brand">
                SIK-POLI IPB
            </div>
            <button class="navbar-toggler rounded " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <a>MENU</a>
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link rounded" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link rounded" href="#rekam-medis">Rekam Medis</a></li>
                    <li class="nav-item"><a class="nav-link rounded" href="#jadwal-dokter">Jadwal Dokter</a></li>                   
                    <li class="nav-item"><a class="nav-link active rounded" href="#konsultasi">Konsultasi</a></li>
                    <buttton class="profile-name" type="button">
                       <a href="#login">{{ Auth::user()->name }}</a> 
                    </buttton>
                </ul>
            </div>
        </div>
    </nav>
-->
    <div class="page-section">
        <div class="container">
            <div class="chat">
                <div class="inbox_msg">
                    <div class="kolom-kiri">
                        <div class="heading_kiri">
                            <button class="btn plus-button">
                                <i class="fa fa-plus"> </i>    
                            </button>
                            <button class=" btn new-conv">
                                New Conversation
                            </button>
                        </div>
                        <div class="box-listchat"> 
                            <div class="list-chat">
                                <div class="kontak">
                                    <div class="profil">
                                    <img src="{{url('/images/profil.png')}}"/>        
                                    </div>                         
                                    <div class="informasi">
                                        <h5>Dr. Laszlo Kreizler</h5>
                                        <p>You: Lorem Ipsum</p>
                                    </div>
                            
                                </div>
                            </div>

                            <div class="list-chat active-chat">
                                <div class="kontak">
                                    <div class="profil">
                                    <img src="{{url('/images/profil.png')}}"/>        
                                    </div>                         
                                    <div class="informasi aktif">
                                        <h5>Dr. Alwi</h5>
                                        <p>You: Lorem Ipsum</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kolom-kanan">
                        <div class="heading-kanan">
                            <div class="heading-profil">
                                <div class="profil">
                                <img src="{{url('/images/profil.png')}}"/>        
                                </div> 
                            </div>                     
                            <div class="informasi">
                                <h5>Dr. Alwi</h5>
                                <p>Lorem Ipsum</p>
                            </div>
                            <button class="btn setting-button" type="button">
                                <i class="fa fa-ellipsis-v"> </i>       
                            </button>
                        </div>
                        <div class="isi-msg">
                            <lu>
                                <li class="dokter-msg">
                                    <p>Lorem ipsum dolor sit amet. cont adipiscing elit sed do eiusmod tempor. cont adipiscing elit sed do eiusmod tempor. </p>
                                    <span class="time_date"> 11:01 AM</span>                                
                                </li>
    
                                <li class="mhs-msg">
                                    <p>Lorem ipsum dolor sit amet, cont adipiscing elit sed do eiusmod. </p>
                                    <span class="time_date sender"> 11:01 AM</span>
                                </li>
    
                                <li div class="dokter-msg">                                                             
                                    <p>Lorem ipsum dolor sit amet, cont adipiscing elit sed do eiusmod tempor. </p>
                                    <span class="time_date"> 11:01 AM</span>                                
                                </li>
    
                                <li class="mhs-msg">
                                    <p>Lorem ipsum dolor sit amet, cont adipiscing elit sed do eiusmod tempor.</p>
                                    <span class="time_date sender"> 11:01 AM</span>
                                </li>

                                <li div class="dokter-msg">                                                             
                                    <p>Lorem ipsum dolor sit amet, cont adipiscing elit sed do eiusmod tempor. </p>
                                    <span class="time_date"> 11:01 AM</span>                                
                                </li>
                            </lu>
                            
                        </div>
                        <div class="kotak-tulis">
                            <button class="btn input-gambar" type="button">
                                <i class="fa fa-camera"> </i>          
                            </button>
                            <form id="send-message">
                                <div class="type-msg">
                                    <div class="input-msg">
                                        <input id="input-me" type="text" placeholder="Type a message" />
                                    </div>
                                </div>
                                <button class="btn send-button" type="submit">
                                    <i class="fa fa-send"> </i>        
                                </button>
                            </form> 
    
                        </div>
                </div>
            </div>
        </div>
    </div>  
    <script >$(".isi-msg").animate({ scrollTop: $(document).height() }, "fast");
        function newMessage() {
            message = $(".input-msg input").val();
            if($.trim(message) == '') {
                return false;
            }
            $('<li class="mhs-msg"><p>' + message + '</p></li>').appendTo($('.isi-msg'));
            $('.input-msg input').val(null);
            $('.aktif').html('<h5>Dr. Alwi</h5><p>You: ' + message + '</p>');
            $(".isi-msg").animate({ scrollTop: $(document).height() }, "fast");
        };

        
        $('submit').click(function(){
            newMessage();
        });
        
        $(window).on('keydown', function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
        });

        $(document).ready(function() {
        $(".list-chat").click(function () {
            $(this).addClass("active-chat");
            $(".list-chat").not(this).removeClass("active-chat");
        });

        });
    </script>

</body>
</html>


<!doctype html><html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
@extends('layouts.master')
@section('content')
<style>
    .popup.active .content{
  transition: all 300ms ease-in-out;
  transform: translate(-50%,-50%) scale(1);
}
</style>
<body style = "background-image:url(./images/bg.png);
    background-color: #1F076C;">

<!--
<div class="popup" id = popup-1>
    <div class="content" style="
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-60%) scale(1);
    width: 300px;
    height: auto;
    padding: 20px;
    z-index: 2;
    text-align: center;
    border-radius: 16px;
    background: white;
    box-shadow: 38px 38px 56px #1e1e1e, -15px -15px 28px #282828;
    z-index: 1;
    ">
        <div class="close-btn" onclick="togglePopup()" style="
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        color: white;
        font-size: 30px;
        border-radius: 50%;
        padding: 2px 5px 7px 5px;
        background: #292929;
        box-shadow: 5px 5px 15px #1e1e1e -5px -5px -15px #343434;
        ">
            X
        </div>
        <h3>Anda ingin Logout?</h3>
        <button class="second-button"> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form></button>
    </div>
</div>
<buttton onclick="togglePopup()" class="first-button" type=button style="
position: absolute;
    top: 50%;
">logout</button>
            

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->

<script>

</script>

</body>

@endsection
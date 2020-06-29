@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid mx-auto rounded jc  mt-4">
    <div class="container ">
        <div class="float-left w-50 text-white m">
            <h1 class="display-4 text-center">GAME SHOP</h1>
            <p class="lead text-center mt-0">GameShop Es una Plataforma donde podrás conseguir
                Juegos para Tu consola al mejor precio del mercado. ¿Quieres saber los
                precios y el catálogo de juegos? Registrate y disfruta. </p>
                <a class="btn btn-primary regist w-50 shadow" href="{{ route('register') }}">{{ __('Register') }}</a>
                <a class="btn btn-dark regist w-50 mt-3 shadow" href="{{ route('login') }}">{{ __('Login') }}</a>
                             
        </div>

        <img class="img" src="/images/control.png">
     
    </div>



</div>

@endsection
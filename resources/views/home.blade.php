@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BIENVENIDO</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hola! {{ Auth::user()->name }}  Bienvenido a Gameshop.
                    da click al boton para ver el catalogo de juegos. 
                     <a  href="{{ route('catalogo') }}" class="btn btn-primary ">Catálogo</a>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="paginate">
{{ $games->links() }}

</div>

<div class="margin">
@foreach($games as $jueg)

<div class="card float-left gma " >
  <img src="imagenes/{{ $jueg->imagen }}" class="card-img-top"  >
  <div class="card-body">
    <h5 class="card-title">{{ $jueg->nombre }}</h5>
    <h6 class="card-title">Price <b>{{ $jueg->precio }}$ </b></h6>
    <p class="card-text">{{ $jueg->descripcion }}</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
    
@endforeach
</div>

 <footer >

<p >	&copy 2020 Copyright</p>

</footer>

@endsection
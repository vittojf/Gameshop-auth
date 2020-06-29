@extends('layouts.app')

@section('content')

<table class="table table-borderless table-dark">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuario as $us )


        <tr>
            <th scope="row">{{ $us->id }}</th>
            <td>{{ $us->nombre }}</td>
            <td>{{ $us ->correo }}</td>
            <td>{{ $us ->contraseña }}</td>
        </tr>
        @endforeach()
    </tbody>
</table>

@endsection
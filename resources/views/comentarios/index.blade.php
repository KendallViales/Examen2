@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comentarios con calificación entre {{ $min }} y {{ $max }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre de Usuario</th>
                <th>Calificación</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
            <tr>
                <td>{{ $comentario->nombre_usuario }}</td>
                <td>{{ $comentario->calificacion }}</td>
                <td>{{ $comentario->detalles }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

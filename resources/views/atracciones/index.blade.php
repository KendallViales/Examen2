@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Atracciones</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Promedio</th>
                <th>Cantidad de Comentarios</th>
                <th>Especie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atracciones as $atraccion)
            <tr>
                <td>{{ $atraccion->titulo }}</td>
                <td>{{ $atraccion->descripcion }}</td>
                <td>{{ number_format($atraccion->promedioCalificaciones(), 2) }}</td>
                <td>{{ $atraccion->comentarios()->count() }}</td>
                <td>
                    <a href="{{ route('especies.show', $atraccion->id_especie) }}">
                        {{ $atraccion->especie->nombre }}
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

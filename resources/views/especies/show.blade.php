@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Especie: {{ $especie->nombre }}</h1>
    <p>Periodo: {{ $especie->periodo }}</p>
    <p>Descripción: {{ $especie->descripcion }}</p>
    <p>Promedio de Calificaciones de las Atracciones: {{ number_format($promedioCalificaciones, 2) }}</p>
</div>
@endsection

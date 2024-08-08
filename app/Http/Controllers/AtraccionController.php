<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atraccion;

class AtraccionController extends Controller
{
    public function index()
    {
        $atracciones = Atraccion::with('comentarios')->get()->map(function ($atraccion) {
            $atraccion->promedio_calificaciones = $atraccion->promedioCalificaciones();
            $atraccion->cantidad_comentarios = $atraccion->cantidadComentarios();
            return $atraccion;
        });

        return view('atracciones.index', compact('atracciones'));
    }

    public function show($id)
    {
        $atraccion = Atraccion::with('comentarios')->findOrFail($id);
        $cantidadComentarios = $atraccion->cantidadComentarios();
        return view('atracciones.show', compact('atraccion', 'cantidadComentarios'));
    }
    
}

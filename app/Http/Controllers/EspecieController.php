<?php

namespace App\Http\Controllers;
use App\Models\Especie;

use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function show($id)
    {
        $especie = Especie::findOrFail($id);
        $promedioCalificaciones = $especie->promedioCalificacionesAtracciones();
        return view('especies.show', compact('especie', 'promedioCalificaciones'));
    }
}
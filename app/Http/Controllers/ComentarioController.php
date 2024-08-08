<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function search(Request $request)
    {
        $min = $request->input('min');
        $max = $request->input('max');

        $comentarios = Comentario::whereBetween('calificacion', [$min, $max])->get();

        return view('comentarios.index', compact('comentarios', 'min', 'max'));
    }
}

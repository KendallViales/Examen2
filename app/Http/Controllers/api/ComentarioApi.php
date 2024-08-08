<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_atraccion' => 'required|exists:atracciones,id',
            'id_especie' => 'required|exists:especies,id',
            'nombre_usuario' => 'required|string|max:50',
            'calificacion' => 'required|integer|min:1|max:5',
            'detalles' => 'required|string|max:100',
        ]);

        $comentario = Comentario::create($validated);

        return response()->json($comentario, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

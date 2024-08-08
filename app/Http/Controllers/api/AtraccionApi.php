<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atraccion;

class AtraccionApi extends Controller
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
        //
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
    public function getEspecie($id)
    {
        $atraccion = Atraccion::findOrFail($id);
        $especie = $atraccion->especie;
        
        return response()->json($especie);
    }

    public function update(Request $request, $id)
    {
        $atraccion = Atraccion::findOrFail($id);

        $validated = $request->validate([
            'titulo' => 'sometimes|required|string|max:50',
            'descripcion' => 'sometimes|required|string|max:50',
            'id_especie' => 'sometimes|required|exists:especies,id',
        ]);

        $atraccion->update($validated);

        return response()->json($atraccion);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

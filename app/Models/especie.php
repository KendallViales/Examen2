<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especie extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'periodo', 'descripcion'];

    public function atracciones()
    {
        return $this->hasMany(Atraccion::class, 'id_especie');
    }

    public function promedioCalificacionesAtracciones()
    {
        return $this->atracciones()->with('comentarios')->get()->flatMap(function ($atraccion) {
            return $atraccion->comentarios;
        })->avg('calificacion');
    }
}

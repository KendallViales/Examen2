<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraccion extends Model
{
    use HasFactory;

    protected $table = 'atracciones';
    protected $fillable = ['titulo', 'descripcion', 'direccion', 'id_especie'];

    public function comentarios (){
        return $this->hasMany(Comentario::class, 'id_atraccion');    
    }

    public function promedioCalificaciones()
    {
        return $this->comentarios()->avg('calificacion');
    }

    public function cantidadComentarios()
    {
        return $this->comentarios()->count();
    }

    public function especie(){
        return $this->belongsTo(Especie::class, 'id_especie');
    }
}

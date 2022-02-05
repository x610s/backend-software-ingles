<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{

    //tipo 1 = Texto plano y con una sola respuesta valida
    //tipo 2 = texto plano y con multiples posibilidades
    //tipo 3 = select con una sola respuesta valida;
    use HasFactory;
    protected $table = "pregunta";
    protected $fillable = [
        'descripcion',
        'requerimiento',
        'respuesta',
        'orden',
        'leccion_id',
        'tipo'
    ];

    public function Leccion()
    {
        return $this->belongsTo(leccion::class);
    }

    public function PosibleRespuesta()
    {
        return $this->hasMany(posiblerespuesta::class);
    }

    public function Opcion()
    {
        return $this->hasMany(opcion::class);
    }
}

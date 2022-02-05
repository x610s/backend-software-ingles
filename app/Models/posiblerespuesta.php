<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posiblerespuesta extends Model
{
    use HasFactory;
    protected $table = "posible_respuesta";
    protected $fillable = [
        'descripcion','pregunta_id'
      ];
    public function Pregunta()
    {
        return $this->belongsTo(pregunta::class);
    }
}

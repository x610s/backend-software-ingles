<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opcion extends Model
{
    use HasFactory;
   protected $table = "opcion";
   protected $fillable = [
    'descripcion', 'correcta','pregunta_id'
  ];
   public function Opcion()
   {
       return $this->belongsTo(opcion::class);
   }
}

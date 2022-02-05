<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leccion extends Model
{
    use HasFactory;
   protected $table = "leccion";
   protected $fillable = [
     'nombre',
     'nivel_id'
   ];

   public function Nivel()
   {
       return $this->belongsTo(nivel::class);
   }

   public function Pregunta()
   {
       return $this->hasMany(pregunta::class);
   }

}

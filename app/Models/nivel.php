<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nivel extends Model
{
    use HasFactory;
   protected $table = "nivel";
   protected $fillable = [
    'nombre'
  ];

  public function Leccion()
  {
      return $this->hasMany(leccion::class);
  }

}

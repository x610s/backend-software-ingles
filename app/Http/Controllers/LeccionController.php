<?php

namespace App\Http\Controllers;

use App\Models\leccion;
use Illuminate\Http\Request;

class LeccionController extends Controller
{

    public function index()
    {
        return leccion::all();
    }


    public function show($id)
    {
        return leccion::find($id)->get();
    }

    public function get_leccion_preguntas($id)
    {
         return response()->json(leccion::find($id)->Pregunta()
        ->with('opcion')
         ->with('posiblerespuesta')->get(), 200);
    }


    public function update(Request $request, $id)
    {
        //
    }
}

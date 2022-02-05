<?php

namespace App\Http\Controllers;

use App\Models\nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{

    public function index()
    {
        return nivel::all();
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return nivel::find($id)->get();
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

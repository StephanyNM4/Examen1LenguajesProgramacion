<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    //
    public function index(){
        $directorio = Directorio::all();
        return view('directorio', compact('directorio'));
    }

    public function create(){
        return view('crearEntrada');
    }

    public function store(Request $request){
        $directorio = new Directorio();
        $directorio->codigoEntrada= $request->input('codigo');
        $directorio->nombre= $request->input('nombre');
        $directorio->apellido= $request->input('apellido');
        $directorio->telefono= $request->input('telefono');
        $directorio->correo= $request->input('correo');

        $directorio->save();
        return redirect()->route('directorio.inicio');
    }

    public function buscar(){
        return view('buscar');
    }

    public function search(Request $request){
        $correo = $request->input('correo');
        return $correo;
    }
    

    public function delete(){
        return view('eliminar');
    }
}

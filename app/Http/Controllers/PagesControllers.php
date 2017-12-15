<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    
        
    public function home(){
        return view('home');
    }
    
    public function contact(){
        return view('contactos');
    }
    
    public function saludo($nombre = "invitado"){
        $script="<script>alert('Problema xss- Cross Site Scripting!')</script>";
    $html="<h2>Contenido html</h2>";
    
    $consolas=[
        "Play Station",
        "Xbox",
        "Wii"
    ];
    return view('saludo', compact('html','nombre', 'script', 'consolas'));
    }
    
    public function mensajes(Request $request){
        
        $this->validate($request, [
            'nombre' =>'required',
          'email'=> 'required|email',
            'mensaje' =>'required|min:5'
        ]);
        
        return $request->all();
       /* if($request->has('nombre'))
        {
            return "Si tiene nombre, es ". $request->input('nombre');
        }
    
        return "no tiene nombre";*/
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request\CreateMessageRequest;

class PagesControllers extends Controller
{
    
    public function __construct(){
       // $this->middleware('example', ['only'=>['home']]);
    }
    
    public function home(){
        return view('home');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPruebaController extends Controller
{
    public function quienesSomos($nombre){
        $usuarios = ['Maria', 'Juan', 'Pedro'];
        return view('hola', ['usuarios' => $usuarios, 'nombre'=>$nombre]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{

    function index() {
        return "Hola mundo";
    }
    public function show($nombre) {
        return view('hola', ['nombre' => $nombre]);
        }
}


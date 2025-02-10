<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    
    public function actividadesVistas(){
        $nivel=[1,2,3];
        $categorias=['Admin','Editor','Suscriptor'];
        $usuarios=['Maria', 'Juan', 'Pedro'];
        return view ('actividadesVistas',compact('nivel','categorias','usuarios'));
    }
}

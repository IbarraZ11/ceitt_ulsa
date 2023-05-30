<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria; 


class PruebasController extends Controller
{
  
    public function testOrm(){

        $articulo = Articulo::all();
        foreach($articulo as $art){
            echo "<h1>".$art->nombre."</h1>";
            echo "<span>{$art->categoria->categoria}</span>";
            echo "<p>"."Inventario: ".$art->inventario."</p>";
        }

        die();
    }

}
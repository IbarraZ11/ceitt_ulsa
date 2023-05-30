<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Categoria;



class CategoryController extends Controller
{
    public function test(Request $request){
        return "Category Test";
    }

    public function index(){
        $categories = Categoria::all();

        return response()->json([
            'code' => 200,
            'categorias' => $categories

        ]);
    }

   public function show($id){
    $category = Categoria::find($id);

    if(is_object($category)){
        return response()->json([
            'code' => 200,
            'categoria' => $category
        ]);
    }else{
        return response()->json([
            'code' => 404,
            'message' => 'categoria no encontrada'

        ]);
    }
   } 
}

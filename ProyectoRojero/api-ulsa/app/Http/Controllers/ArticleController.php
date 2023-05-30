<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Articulo;

class ArticleController extends Controller
{
    public function test(Request $request){
        return "Article Test";
    }

    public function index(){
        $articles = Articulo::all();

        return response()->json([
            'code' => 200,
            'articles' => $articles

        ]);
    }

   public function show($id){
    $article = Articulo::find($id);

    if(is_object($article)){
        return response()->json([
            'code' => 200,
            'article' => $article
        ]);
    }else{
        return response()->json([
            'code' => 404,
            'message' => 'articulo no encontrado'

        ]);
    }
   } 
}

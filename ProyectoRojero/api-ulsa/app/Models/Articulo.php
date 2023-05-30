<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    public function user(){
        return $this->belongTo('App\Models\User','idAlumno');
    }

    
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','idCategoria');  
   }
    
}

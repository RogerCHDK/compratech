<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= 'productos'; 
   	protected $fillable = ['marca','precio','descripcion','stock','categoria_id','status','nombre'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacenamiento extends Model
{
    protected $table= 'almacenamiento'; 
   	protected $fillable = ['interface','capacidad','velocidad_lectura','velocidad_escritura','producto_id','status','tipo_almacenamiento'];
}

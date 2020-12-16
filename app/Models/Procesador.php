<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    protected $table= 'procesadores'; 
   	protected $fillable = ['familia','modelo','socket','frecuencia','numero_nucleos','status','producto_id'];

       public function producto() 
       { 
           return $this->belongsTo('App\Models\Producto');
       }
}

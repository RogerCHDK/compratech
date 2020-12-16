<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TarjetaVideo extends Model
{
    protected $table= 'tarjetas_videos'; 
   	protected $fillable = ['memoria_adaptador','ancho_datos','frecuencia','tipo_interfaz','status','producto_id'];

       public function producto() 
       { 
           return $this->belongsTo('App\Models\Producto');
       }
}

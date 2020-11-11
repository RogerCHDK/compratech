<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TarjetaMadre extends Model
{
    protected $table= 'tarjetas_madres'; 
   	protected $fillable = ['familia_procesador','circuito_integrado','socket_procesador','memoria_interna','tipo_memoria','status','producto_id'];
}

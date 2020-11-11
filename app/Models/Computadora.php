<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    protected $table= 'computadoras'; 
   	protected $fillable = ['tarjeta_madre_id','tarjeta_video_id','procesador_id','fuente_poder_id','ram_id','almacenamiento_id','gabinete_id','tipo','producto_id'];
}

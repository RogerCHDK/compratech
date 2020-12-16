<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    protected $table= 'ram'; 
    protected $fillable = ['tipo_memoria','memoria_interna','velocidad','latencia','producto_id','status']; 
       
    public function producto(){
    	return $this->belongsTo('App\Models\Producto','producto_id','id');
    }
}

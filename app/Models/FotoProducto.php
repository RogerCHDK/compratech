<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProducto extends Model
{
    protected $table= 'fotos_productos'; 
    protected $fillable = ['ruta','producto_id','status'];
    public function productos(){
    	return $this->belongsTo('App\Models\Producto','producto_id','id');
    }
    
}

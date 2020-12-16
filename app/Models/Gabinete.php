<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gabinete extends Model
{
    protected $table= 'gabinetes'; 
    protected $fillable = ['factor_forma','puertos_usb','tarjeta_madre_soportada','status','producto_id'];
    public function producto(){
    	return $this->belongsTo('App\Models\Producto','producto_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= 'productos'; 
    protected $fillable = ['marca','precio','descripcion','stock','categoria_id','status','nombre'];
    
    public function fuentes()
    {
        return $this->hasMany('App\Models\FuentePoder');
    }

    public function procesadores()
    {
        return $this->hasMany('App\Models\Procesador');
    }

    public function tarjeta_madre()
    {
        return $this->hasMany('App\Models\TarjetaMadre');
    }

    public function tarjeta_video()
    {
        return $this->hasMany('App\Models\TarjetaVideo');
    }
    public function fotos()
    {
        return $this->hasMany(FotoProducto::class);
    }

    public function categoria() 
       { 
           return $this->belongsTo('App\Models\Categoria');
       }
}

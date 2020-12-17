<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table= 'users'; 
    protected $fillable = ['nombre','ap_paterno','ap_materno','calle','colonia','estado_id','municipio_id','codigo_postal','email','password','telefono','tipo_usuario','status'];
    
    public function entidades(){
    	return $this->belongsTo('App\Entidades','entidad_id','id');
    }

    public function municipios(){
    	return $this->belongsTo('App\Municipios','municipio_id','id');
    }
}

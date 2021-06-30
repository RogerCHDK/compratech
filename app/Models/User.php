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
    
    public function estado(){
    	return $this->belongsTo('App\Models\Estado');
    }

    public function municipio(){
    	return $this->belongsTo('App\Models\Municipio');
    }
}

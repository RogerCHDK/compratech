<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table= 'municipios'; 
    protected $fillable = ['nombre','estado_id','status'];
    public function estado(){
    	return $this->belongsTo('App\Models\Estado','estado_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuentePoder extends Model
{
    protected $table= 'fuentes_poder'; 
   	protected $fillable = ['factor_forma','alimentador_energia','certificacion','potencia','diametro','numero_conectores','status','producto_id'];
}

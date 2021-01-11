<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table= 'compras'; 
    protected $fillable = ['user_id','precio_total','fecha_compra','status'];
}

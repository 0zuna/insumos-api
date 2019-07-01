<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
    public function entradas()
    {
        return $this->hasMany('App\Entrada');
    }
    public function salidas()
    {
        return $this->hasMany('App\Salida');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}

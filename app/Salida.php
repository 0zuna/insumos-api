<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}

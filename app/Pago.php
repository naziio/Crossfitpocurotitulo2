<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $fillable = ['tipopago_fk', 'user_fk', 'fechapago','fechaexpira'];


public function user()
{
    return $this->belongsTo('App\User','user_fk');
}

public function tipopago()
{
    return $this->belongsto('App\TipoPago','tipopago_fk');
}


}
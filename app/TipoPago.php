<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $table = 'tipopago';
    protected $fillable = ['type', 'monto'];

    public function pago()
    {
        return $this->hasone('App\Pago');
    }
}

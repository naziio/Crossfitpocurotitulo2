<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilitarEvaluacion extends Model
{
   protected $table = 'habilitarevaluacion';
    protected $fillable = ['estado','user_fk'];


    public function user()
    {
        return $this->belongsto('App\User','user_id_fk');
    }
}

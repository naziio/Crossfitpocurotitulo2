<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
   protected $table= 'evaluacion';

    protected $fillable = ['pullup', 'pushup', 'abd','sentadilla','sentadillapeso','sentadillafrontal','10k','pressbanca','clean','snatch','salto','user_id_fk'];


    public function user()
    {
        return $this->belongsto('App\User','user_fk');
    }
}

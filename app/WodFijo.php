<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WodFijo extends Model
{
    protected $table = 'wodfijo';
    protected $fillable = ['nombre', 'peso', 'tiempo', 'fecha'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}

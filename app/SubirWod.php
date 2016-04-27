<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubirWod extends Model
{
    protected $table = 'subirwod';
    protected $fillable = ['nombre', 'descripcion'];
}

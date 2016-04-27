<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WodDiario extends Model
{
    protected $table = 'woddiario';
    protected $fillable = ['nombre', 'descripcion', 'fecha'];


}

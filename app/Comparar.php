<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparar extends Model
{
    protected $table = 'wodfijo';
    protected $fillable = ['user_id_fk', 'peso', 'tiempo'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
    protected $table = 'noticia';
    protected $fillable = ['name', 'descripcion', 'fecha'];
}

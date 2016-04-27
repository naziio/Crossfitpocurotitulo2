<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Storage;

class BioUser extends Model
{

    protected $table = 'bio';
    protected $fillable = ['peso', 'estatura', 'biografia','path','user_id_fk'];
    public function getAgeAttribute()
    {
        return Carbon::parse($this->nacimiento)-> age;
    }
    public function user()
    {
        return $this->belongsto('App\User','user_id_fk');
    }

    public function setPathAttribute($path)
    {
        $this->attributes['path']= Carbon::now()->second.$path->getClientOriginalName();
        $name = Carbon::now()->second.$path->getClientOriginalName();

        \Storage::disk('local')->put($name, \File::get($path));
    }



}


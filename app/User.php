<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the password for the user.
     *
     * @return string
     */
   /* public function setPasswordAttribute($value)

    {
        if(!empty($value)){
            return $this->attributes['password']= bcrypt($value);
        }

    }
    public function getAuthPassword()
    {
        return $this->password;
    }*/
    public function biouser()
    {
        return $this->hasone('App\BioUser','user_id_fk');
    }

    public function evaluacion()
    {
        return $this->hasmany('App\Evaluacion','user_id_fk');
    }
    public function wodfijo()
    {
        return $this->belongsTo('App\WodFijo');
    }

public function pago()
{
    return $this->hasMany('App\Pago');
}
    public function habilitarevaluacion()
    {
        return $this->hasone('App\HabilitarEvaluacion','user_fk');
    }
}
<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guard = 'user';
    public $email;
    public $username;
    public $password;
    public $login;
    protected $fillable = [
        'login',
        'email',
        'password',
        'username',
    ];
//    public function setPasswordAttribute($password)
//    {
//        $this->attributes['password'] = \Hash::make($password);
//    }
    protected $table = 'users';

    public function role(){
        return $this->belongsToMany('Roles', 'User_Roles', 'User_id', 'id');
    }
}

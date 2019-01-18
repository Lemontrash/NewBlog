<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
    protected $table = 'users';

    public function role(){
        return $this->belongsToMany('Roles', 'User_Roles', 'User_id', 'id');
    }
}

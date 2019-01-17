<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    public function role(){
        return $this->belongsToMany('Roles', 'User_Roles', 'User_id', 'id');
    }
}

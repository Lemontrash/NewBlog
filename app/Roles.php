<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    public function users(){
        return $this->belongsToMany('Users', 'user_roles', 'Role_id', 'id');
    }
}

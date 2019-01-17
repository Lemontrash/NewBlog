<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function post(){
        return $this->hasMany(Posts::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    public function likes(){
        return $this->morphMany('app/Comments.php', 'likable');
    }
}

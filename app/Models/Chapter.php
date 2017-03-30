<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
}

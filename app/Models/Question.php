<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function part()
    {
        return $this->belongsTo('App\Models\Part');
    }
}

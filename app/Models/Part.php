<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function chapters()
    {
        return $this->hasMany('App\Models\Chapter');
    }
}

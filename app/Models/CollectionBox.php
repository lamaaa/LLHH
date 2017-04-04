<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionBox extends Model
{
    protected $fillable = ['user_id'];
    protected $table = 'collectionBoxes';

    public function collectionBoxQuestions()
    {
        return $this->hasMany('App\Models\CollectionBoxQuestion', 'collectionBox_id');
    }
}

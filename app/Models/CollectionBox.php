<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionBox extends Model
{
    protected $fillable = ['user_id'];
    protected $table = 'collectionBoxes';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function collectionBoxQuestions()
    {
        return $this->hasMany('App\Models\CollectionBoxQuestion');
    }
}

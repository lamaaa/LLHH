<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionBoxQuestion extends Model
{
    protected $fillable = ['collectionBox_id', 'question_id'];
    protected $table = 'collectionBox_questions';

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}

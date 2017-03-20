<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CompletionQuestion
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $description
 * @property string $difficulty
 * @property string $topic
 * @property string $source
 * @property string $answer
 * @property bool $is_old
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereDifficulty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereIsOld($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereTopic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CompletionQuestion whereUpdatedAt($value)
 */
class CompletionQuestion extends Model
{
    //
    protected $table = 'completion_questions';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ChoiceQuestion
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $description
 * @property string $difficulty
 * @property string $topic
 * @property string $answer
 * @property string $source
 * @property bool $is_old
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereDifficulty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereIsOld($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereTopic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ChoiceQuestion whereUpdatedAt($value)
 */
class ChoiceQuestion extends Model
{
    protected $table = 'choice_questions';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CalculationQuestion
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
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereDifficulty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereIsOld($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereTopic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CalculationQuestion whereUpdatedAt($value)
 */
class CalculationQuestion extends Model
{
    protected $table = 'calculation_questions';
}

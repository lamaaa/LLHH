<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/26
 * Time: 19:35
 */
namespace App\Repositorys;

use App\Models\Question;

class IndexRepository
{
    public function getOldQuestions($num)
    {
        $oldQuestions = Question::where('is_old', false)
            ->take($num)
            ->get();
        return $oldQuestions;
    }

    public function getFallibleQuestions($num)
    {
        $fallibleQuestions = Question::orderBy('mistake_times', 'desc')
            ->take($num)
            ->get();
        return $fallibleQuestions;
    }
}
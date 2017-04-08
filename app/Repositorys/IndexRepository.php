<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/26
 * Time: 19:35
 */
namespace App\Repositorys;

use App\Models\Collection;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class IndexRepository
{
    public function getFallibleQuestions($num)
    {
        $fallibleQuestions = Question::orderBy('mistake_times', 'desc')
            ->take($num)
            ->get();
        return $fallibleQuestions;
    }

    public function getPopularQuestions($num)
    {
        $popularQuestions = Question::orderBy('collected_times', 'desc')
            ->take($num)
            ->get();

        return $popularQuestions;
    }
}
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
        $collections = Collection::select(DB::raw('*, count(*) as collected_times'))
                                ->groupBy('question_id')
                                ->orderBy('collected_times', 'desc')
                                ->take($num)
                                ->get();

        $popularQuestions = array();
        foreach ($collections as $collection)
        {
            $collection->question->collected_times = $collection->collected_times;
            $popularQuestions[] = $collection->question;
        }

        return $popularQuestions;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/31
 * Time: 15:16
 */
namespace App\Repositorys;

use App\Models\Question;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChapterRepository
{
    public function getQuestions($chapter_id, $filter, $sort)
    {
        $questions = Question::where('chapter_id', $chapter_id)
            ->get();

        $questions = $this->filterQuestions($questions, $filter);
        // 记录每道题错误次数
        foreach ($questions as $question)
        {
            $thisUser_mistake_times = Record::where('user_id', Auth::user()->id)->where('question_id', $question->id)
                                                    ->where('isRight', false)
                                                    ->count();

            $question->thisUser_mistake_times = $thisUser_mistake_times;
        }

        $questions = $this->setCollections($questions);

        $questions = $this->toArray($questions);

        $questions = $this->sort($questions, $sort);

        return $questions;
    }

    public function sort($questions, $sort)
    {
        usort($questions, function($question1, $question2) use ($sort){
            $criteria = $sort['criteria'];
            if ($sort['order'] == 'asc')
            {
                return $question1->$criteria > $question2->$criteria;
            }
            else
            {
                return $question2->$criteria > $question1->$criteria;
            }
        });
        return $questions;
    }

    public function toArray($toArrayItems)
    {
        $questions = array();

        foreach ($toArrayItems as $arrayItem)
        {
            $questions[] = $arrayItem;
        }
        return $questions;
    }

    public function setCollections($questions)
    {
        if (Auth::check())
        {
            $collections = Auth::user()->collections;
            $collectionIds = array();
            foreach ($collections as $collection)
            {
                $collectionIds[] = $collection->question_id;
            }

            foreach ($questions as $question)
            {
                if (in_array($question->id, $collectionIds))
                {
                    $question->isAdd = 1;
                }
                else
                {
                    $question->isAdd = 0;
                }
            }
        }
        else
        {
            foreach ($questions as $question) {
                $question->isAdd = 0;
            }
        }

        return $questions;
    }

    public function filterQuestions($questions, $filter)
    {
        $search = $filter['search'];
        // 筛选难度
        switch ($filter['difficulty']){
            case 'easy':
                $difficulties = [1, 2];
                break;
            case 'middle':
                $difficulties = [3, 4];
                break;
            case 'difficult':
                $difficulties = [5];
                break;
            default:
                $difficulties = [1, 2, 3, 4, 5];
        }

        // 筛选题型
        switch ($filter['type']){
            case 'choice':
                $types = [1];
                break;
            case 'completion':
                $types = [2];
                break;
            case 'calculation':
                $types = [3];
                break;
            default:
                $types = [1, 2, 3];
        }
        $questions = $questions->filter(function($question) use ($difficulties){
            return in_array($question->difficulty, $difficulties);
        });

        $questions = $questions->filter(function($question) use ($types){
            return in_array($question->type, $types);
        });

        if ($search)
        {
            $questions = $questions->filter(function($question) use ($search){
                return strpos($question->description, $search);
            });

        }

        return $questions;
    }
}
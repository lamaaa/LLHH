<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/8
 * Time: 20:20
 */
namespace App\Repositorys;

use Illuminate\Support\Facades\Auth;

class QuestionRepository
{
    public function getQuestions()
    {
        $questions = array();

        $records = Auth::user()->records;
        foreach ($records as $record) {
            $record->question->did_at = $record->created_at;
            $record->question->isRight = $record->isRight;
            $questions[] = $record->question;
        }

        return $questions;
    }

    public function getWrongQuestions($filter, $sort)
    {
        $questions = array();

        $records = Auth::user()->records()->where('isRight', false)->get();
        foreach ($records as $record) {
            $record->question->did_at = $record->created_at;
            $questions[] = $record->question;
        }

        $questions = $this->filterQuestions($questions, $filter);

        $questions = $this->sort($questions, $sort);

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
        $questions = array_filter($questions, function($question) use ($difficulties) {
            return (in_array($question->difficulty, $difficulties));
        });

        $questions = array_filter($questions, function($question) use ($types){
            return (in_array($question->type, $types));
        });

        if ($search)
        {
            $questions = array_filter($questions, function($question) use ($search){
                return strpos($question->description, $search);
            });
        }

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
}
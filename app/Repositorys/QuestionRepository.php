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

    public function getWrongQuestions()
    {
        $questions = array();

        $records = Auth::user()->records()->where('isRight', false)->get();
        foreach ($records as $record) {
            $record->question->did_at = $record->created_at;
            $questions[] = $record->question;
        }

        return $questions;
    }
}
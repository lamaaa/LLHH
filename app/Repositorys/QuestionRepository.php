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
        $records = Auth::user()->records;

    }
}
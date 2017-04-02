<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/28
 * Time: 19:11
 */
namespace App\Repositorys;


use App\Models\Question;

class QuestionRepository
{
    public function all()
    {
        return Question::paginate();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/31
 * Time: 15:16
 */
namespace App\Repositorys;

use App\Models\Question;

class ChapterRepository
{
    public function getQuestions($chapter_id)
    {
        return Question::where('chapter_id', $chapter_id)->get();
    }
}
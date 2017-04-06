<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/31
 * Time: 15:16
 */
namespace App\Repositorys;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChapterRepository
{
    public function getQuestions($chapter_id, $difficulty)
    {
        $difficulties = array();
        switch ($difficulty){
            case 0:
                $difficulties = [1, 2, 3, 4, 5];
                break;
            case 1:
                $difficulties = [1, 2];
                break;
            case 2:
                $difficulties = [3, 4];
                break;
            case 3:
                $difficulties = [5];
                break;
        }
        $questions = Question::where('chapter_id', $chapter_id)
            ->whereIn('difficulty', $difficulties)
            ->paginate(10);

        $questions = $this->setCollections($questions);

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
}
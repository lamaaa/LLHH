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
    public function questions($chapter_id, $difficulty)
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
        return Question::where('chapter_id', $chapter_id)
            ->whereIn('difficulty', $difficulties)
            ->paginate(10);
    }
}
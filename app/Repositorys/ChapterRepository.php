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
    public function questions($chapter_id, $difficutly)
    {
        $difficutlies = array();
        switch ($difficutly){
            case 0:
                $difficutlies = [1, 2, 3, 4, 5];
                break;
            case 1:
                $difficutlies = [1, 2];
                break;
            case 2:
                $difficutlies = [3, 4];
                break;
            case 3:
                $difficutlies = [5];
                break;
        }
        return Question::where('chapter_id', $chapter_id)
            ->whereIn('difficulty', $difficutlies)
            ->paginate(10);
    }
}
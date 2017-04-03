<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/3
 * Time: 13:38
 */
namespace App\Services;

use Illuminate\Http\Request;

class ChapterService
{
    public function getDifficulty(Request $request)
    {
        $difficulty = [1, 2, 3];
        if ($request->has('difficulty') && in_array($request->input('difficulty'), $difficulty))
        {
            return $request->input('difficulty');
        }
        return 0;
    }
}
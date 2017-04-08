<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/7
 * Time: 13:53
 */
namespace App\Repositorys;

use App\Models\Question;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RecordRepository
{
    public $resultCode = array();

    public function addRecord(Request $request)
    {
        $question_id = $request->input('question_id');
        $isRight = $request->input('isRight');

        // 检查question_id是否合法
        $question = Question::find($question_id);
        if (!$question)
        {
            $this->resultCode = ['resultCode' => 0];
            return $this->resultCode;
        }

        // 创建一条做题记录
        $record = Record::create([
            'user_id'   =>  Auth::user()->id,
            'question_id'   =>  $question_id,
            'isRight'     =>  $isRight
        ]);

        // 如果做错的话，就更新该题被做错的次数。
        if (!$isRight)
        {
            $question->mistake_times++;
            $question->save();
        }

        if ($record)
        {
            $mistake_times = Record::where('user_id', Auth::user()->id)
                                    ->where('question_id', $question_id)
                                    ->where('isRight', false)
                                    ->count();
            $this->resultCode = ['resultCode' => 1, 'mistake_times' => $mistake_times];
            return $this->resultCode;
        }

        $this->resultCode = ['resultCode' => 0];
        return $this->resultCode;
    }
}
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

        $record = Record::create([
            'user_id'   =>  Auth::user()->id,
            'question_id'   =>  $question_id,
            'isRight'     =>  $isRight
        ]);

        if ($record)
        {
            $this->resultCode = ['resultCode' => 1];
            return $this->resultCode;
        }

        $this->resultCode = ['resultCode' => 0];
        return $this->resultCode;
    }
}
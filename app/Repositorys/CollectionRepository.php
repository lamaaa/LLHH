<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/4
 * Time: 17:02
 */
namespace App\Repositorys;

use App\Models\Collection;
use App\Models\CollectionBox;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionRepository
{
    public $resultCode = array();

    public function addQuestion(Request $request)
    {
        $isAdd = $this->createCollection($request->input('question_id'));

        if (!$isAdd)
        {
            $this->resultCode = ['resultCode' => 0];
        }
        return $this->resultCode;
    }

    public function createCollection($question_id)
    {
        // 验证$question_id是否合法
        if (!Question::find($question_id))
        {
            return false;
        }
        $collection = Collection::where('user_id', Auth::user()->id)
            ->where('question_id', $question_id)->first();
        // 已添加
        if ($collection)
        {
            $this->resultCode = ['resultCode' => 2];
            return true;
        }
        // 未添加
        $collection = Collection::create([
                'user_id'  =>  Auth::user()->id,
                'question_id'       =>  $question_id
            ]);
        if ($collection)
        {
            $this->resultCode = ['resultCode' => 1];
            return true;
        }
        // 不能添加
        return false;
    }

    public function getCollectionBox()
    {
        $collectionBox = CollectionBox::where('user_id', Auth::user()->id)->first();
        if (!$collectionBox)
        {
            $collectionBox = CollectionBox::create(['user_id' => Auth::user()->id]);
        }

        return $collectionBox;
    }

    public function getCollectedQuestions()
    {
        $questions = array();
        $collections = Auth::user()->collections;
        foreach ($collections as $collection)
        {
            $collection->question->collected_at = $collection->created_at;
            $questions[] = $collection->question;
        }
        return $questions;
    }
}
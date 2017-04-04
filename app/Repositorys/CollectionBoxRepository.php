<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/4
 * Time: 17:02
 */
namespace App\Repositorys;

use App\Models\CollectionBox;
use App\Models\CollectionBoxQuestion;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionBoxRepository
{
    public $resultCode = array();

    public function addQuestion(Request $request)
    {
        $collectionBox = $this->getCollectionBox();
        $isAdd = $this->createCollectionBoxQuestion($collectionBox, $request->input('question_id'));

        if (!$isAdd)
        {
            $this->resultCode = ['resultCode' => 0];
        }
        return $this->resultCode;
    }

    public function createCollectionBoxQuestion(CollectionBox $collectionBox, $question_id)
    {
        // 验证$question_id是否合法
        if (!Question::find($question_id))
        {
            return false;
        }
        $collectionBoxQuestion = CollectionBoxQuestion::where('collectionBox_id', $collectionBox->id)
            ->where('question_id', $question_id)->first();
        // 已添加
        if ($collectionBoxQuestion)
        {
            $this->resultCode = ['resultCode' => 2];
            return true;
        }
        // 未添加
        $collectionBoxQuestion = CollectionBoxQuestion::create([
                'collectionBox_id'  =>  $collectionBox->id,
                'question_id'       =>  $question_id
            ]);
        if ($collectionBoxQuestion)
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
}
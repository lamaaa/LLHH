<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/4
 * Time: 17:02
 */
namespace App\Repositorys;

use App\Models\Collection;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CollectionRepository
{
    public $resultCode = array();

    public function deleteCollection(Request $request)
    {
        $question_id = $request->input('question_id');
        $collection = Collection::where('question_id', $question_id)
            ->where('user_id', Auth::user()->id)->first();
        if ($collection)
        {
            if ($collection->delete())
            {
                $this->resultCode = ['resultCode' => 1];
                return $this->resultCode;
            }
        }
        $this->resultCode = ['resultCode' => 0];
        return $this->resultCode;
    }

    public function addCollection(Request $request)
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

    public function destroy($question_id)
    {
        Collection::where('user_id', Auth::user()->id)
            ->where('question_id', $question_id)
            ->delete();

        return redirect()->back();
    }

    public function getCollections($filter, $sort)
    {
        $questions = array();
        $collections = Auth::user()->collections;
        foreach ($collections as $collection)
        {
            $collection->question->collected_at = $collection->created_at;
            $questions[] = $collection->question;
        }

        // 筛选题型和难度
        $questions = $this->filterCollections($questions, $filter);
        // 对题目进行排序
        $questions = $this->sort($questions, $sort);
        return $questions;
    }

    public function sort($questions, $sort)
    {
        usort($questions, function($question1, $question2) use ($sort){
            $criteria = $sort['criteria'];
            if ($sort['order'] == 'asc')
            {
                return $question1->$criteria > $question2->$criteria;
            }
            else
            {
                return $question2->$criteria > $question1->$criteria;
            }
        });
        return $questions;
    }

    public function filterCollections($questions, $filter)
    {
        $search = $filter['search'];
        // 筛选难度
        switch ($filter['difficulty']){
            case 1:
                $difficulties = [1, 2];
                break;
            case 2:
                $difficulties = [3, 4];
                break;
            case 3:
                $difficulties = [5];
                break;
            default:
                $difficulties = [1, 2, 3, 4, 5];
        }

        // 筛选题型
        switch ($filter['type']){
            case 1:
                $types = [1];
                break;
            case 2:
                $types = [2];
                break;
            case 3:
                $types = [3];
                break;
            default:
                $types = [1, 2, 3];
        }
        $questions = array_filter($questions, function($question) use ($difficulties) {
            return (in_array($question->difficulty, $difficulties));
        });

        $questions = array_filter($questions, function($question) use ($types){
            return (in_array($question->type, $types));
        });

        if ($search)
        {
            $questions = array_filter($questions, function($question) use ($search){
                return strpos($question->description, $search);
            });
        }

        return $questions;
    }
}
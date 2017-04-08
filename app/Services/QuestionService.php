<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/8
 * Time: 20:43
 */
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

class QuestionService
{
    public function paginate(Request $request, $questions)
    {
        $page = Input::get('page', 1);
        $perPage = 15;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(
            array_slice($questions, $offset, $perPage, true),
            count($questions),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    }

    public function getFilter(Request $request)
    {
        $difficulties = [1, 2, 3];
        $types = [1, 2, 3];
        $filter['search'] = $request->input('search');
        $filter['difficulty'] = 0;
        if ($request->has('difficulty') && in_array($request->input('difficulty'), $difficulties))
        {
            $filter['difficulty'] = $request->input('difficulty');
        }

        $filter['type'] = 0;
        if ($request->has('type') && in_array($request->input('type'), $types))
        {
            $filter['type'] = $request->input('type');
        }

        return $filter;
    }

    public function getSort(Request $request)
    {
        $sort['order'] = $request->input('order', 'asc');
        $sort['criteria'] = $request->input('criteria', 'collected_at');

        return $sort;
    }
}
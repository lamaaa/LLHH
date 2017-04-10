<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/4/4
 * Time: 23:32
 */
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

class CollectionService
{
    public function paginate(Request $request, $collectedQuestions)
    {
        $page = Input::get('page', 1);
        $perPage = 15;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(
            array_slice($collectedQuestions, $offset, $perPage, true),
            count($collectedQuestions),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    }

    public function getFilter(Request $request)
    {
        $difficulties = ['easy', 'middle', 'difficult'];
        $types = ['choice', 'completion', 'calculation'];
        $filter['search'] = $request->input('search');
        $filter['difficulty'] = 'all';
        if ($request->has('difficulty') && in_array($request->input('difficulty'), $difficulties))
        {
            $filter['difficulty'] = $request->input('difficulty');
        }

        $filter['type'] = 'all';
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
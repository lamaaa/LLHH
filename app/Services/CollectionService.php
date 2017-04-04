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
}
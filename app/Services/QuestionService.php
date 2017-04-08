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
}
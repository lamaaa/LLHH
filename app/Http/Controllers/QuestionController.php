<?php

namespace App\Http\Controllers;

use App\Repositorys\QuestionRepository;
use App\Services\QuestionService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    protected $questionRepository;
    protected $questionService;

    public function __construct(QuestionRepository $questionRepository,
                                QuestionService $questionService)
    {
        $this->middleware('auth');

        $this->questionRepository = $questionRepository;
        $this->questionService = $questionService;
    }

    public function done(Request $request)
    {
        $filter = $this->questionService->getFilter($request);
        $sort = $this->questionService->getSort($request);
        $questions = $this->questionRepository->getQuestions();
        $questions = $this->questionService->paginate($request, $questions);
        $active = '';

        return view('questions.done', compact('questions', 'active', 'filter', 'sort'));
    }

    public function wrong(Request $request)
    {
        $filter = $this->questionService->getFilter($request);
        $sort = $this->questionService->getSort($request);
        $questions = $this->questionRepository->getWrongQuestions($filter, $sort);
        $questions = $this->questionService->paginate($request, $questions);
        $active = '';

        return view('questions.wrong', compact('questions', 'active', 'filter', 'sort'));
    }
}

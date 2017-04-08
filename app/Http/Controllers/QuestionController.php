<?php

namespace App\Http\Controllers;

use App\Repositorys\QuestionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    protected $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->middleware('auth');

        $this->questionRepository = $questionRepository;
    }

    public function done()
    {
        $questions = $this->questionRepository->getQuestions();

        return view('questions.done', compact('questions'));
    }

    public function wrong()
    {

    }
}

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
        $this->questionRepository = $questionRepository;
    }

    public function index(){
        return view('questions.list');
    }

    //Aranl 增加一个测试用的Route:doThepapers
    public function doThePapers(){
        return view('questions.doThePapers');
    }
}

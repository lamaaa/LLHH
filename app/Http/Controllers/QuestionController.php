<?php

namespace App\Http\Controllers;

use App\Repositorys\ChapterRepository;
use App\Repositorys\ModuleRepository;
use App\Repositorys\PartRepository;
use App\Repositorys\QuestionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    protected $questionRepository;
    protected $moduleRepository;

    public function __construct(QuestionRepository $questionRepository,
                                ModuleRepository $moduleRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->moduleRepository = $moduleRepository;
    }

    public function index(){
        $modules = $this->moduleRepository->all();

        return view('questions.list', compact(['modules']));
    }

    //Aranl 增加一个测试用的Route:doThepapers
    public function doThePapers(){
        return view('questions.doThePapers');
    }
}

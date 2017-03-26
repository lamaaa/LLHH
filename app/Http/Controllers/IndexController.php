<?php

namespace App\Http\Controllers;

use App\Repositorys\IndexRepository;
use App\Services\IndexService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $indexRepository;
    protected $indexService;

    public function __construct(IndexService $indexService,
                                IndexRepository $indexRepository)
    {
        $this->indexRepository = $indexRepository;
        $this->indexService = $indexService;
    }

    public function home()
    {
        $oldQuestions = $this->indexRepository->getOldQuestions(10);
        $fallibleQuestions = $this->indexRepository->getFallibleQuestions(10);
        return view('static_pages.home', compact(['oldQuestions', 'fallibleQuestions']));
    }

    public function help()
    {
        return view('static_pages.help');
    }

    public function about()
    {
        return view('static_pages.about');
    }
}

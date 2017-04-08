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
        $fallibleQuestions = $this->indexRepository->getFallibleQuestions(10);
        $popularQuestions = $this->indexRepository->getPopularQuestions(10);
        $active = 'home';
        return view('home.index', compact(['fallibleQuestions', 'popularQuestions', 'active']));
    }

    public function help()
    {
        $active = 'help';
        return view('static_pages.help', compact('active'));
    }

    public function about()
    {
        $active = 'about';
        return view('static_pages.about', compact('active'));
    }
}

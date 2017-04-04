<?php

namespace App\Http\Controllers;

use App\Repositorys\CollectionRepository;
use App\Services\CollectionService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    protected $collectionRepository;
    protected $collectionService;

    public function __construct(CollectionRepository $collectionRepository,
                                CollectionService $collectionService)
    {
        $this->middleware('auth');

        $this->collectionRepository = $collectionRepository;
        $this->collectionService = $collectionService;
    }

    public function index(Request $request)
    {
        $collectQuestions = $this->collectionRepository->getCollectQuestions();
        $questions = $this->collectionService->paginate($request,$collectQuestions);
        return view('collections.index', compact('questions'));
    }

    public function store(Request $request)
    {
        $resultCode = $this->collectionRepository->addQuestion($request);
        return $resultCode;
    }
}

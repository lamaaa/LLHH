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
        $collectedQuestions = $this->collectionRepository->getCollectedQuestions();
        $questions = $this->collectionService->paginate($request,$collectedQuestions);
        return view('collections.index', compact('questions'));
    }

    public function store(Request $request)
    {
        $resultCode = $this->collectionRepository->addCollection($request);
        return $resultCode;
    }

    public function delete(Request $request)
    {
        $resultCode = $this->collectionRepository->deleteCollection($request);
        return $resultCode;
    }
}

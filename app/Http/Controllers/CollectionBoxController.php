<?php

namespace App\Http\Controllers;

use App\Repositorys\CollectionBoxRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectionBoxController extends Controller
{
    protected $collectionBoxRepository;

    public function __construct(CollectionBoxRepository $collectionBoxRepository)
    {
        $this->middleware('auth');

        $this->collectionBoxRepository = $collectionBoxRepository;
    }

    public function index()
    {
        $collectQuestions = $this->collectionBoxRepository->getCollectQuestions();
        return view('collectionBoxes.index', compact('collectQuestions'));
    }

    public function store(Request $request)
    {
        $resultCode = $this->collectionBoxRepository->addQuestion($request);
        return $resultCode;
    }
}

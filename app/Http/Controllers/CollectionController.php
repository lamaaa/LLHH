<?php

namespace App\Http\Controllers;

use App\Repositorys\CollectionRepository;
use App\Services\CollectionService;
use Illuminate\Http\Request;

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
        $filter = $this->collectionService->getFilter($request);
        $sort = $this->collectionService->getSort($request);
        $collections = $this->collectionRepository->getCollections($filter, $sort);
        $questions = $this->collectionService->paginate($request,$collections);
        $active = 'collections';
        return view('collections.index', compact('questions', 'filter', 'sort', 'active'));
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

    public function destroy($question_id)
    {
        return $this->collectionRepository->destroy($question_id);
    }
}

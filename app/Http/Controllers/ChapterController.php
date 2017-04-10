<?php

namespace App\Http\Controllers;

use App\Repositorys\ChapterRepository;
use App\Repositorys\ModuleRepository;
use App\Services\ChapterService;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    protected $chapterRepository;
    protected $moduleRepository;
    protected $chapterService;

    public function __construct(ChapterRepository $chapterRepository,
                                ModuleRepository $moduleRepository,
                                ChapterService $chapterService)
    {
        $this->middleware('auth');
        $this->chapterRepository = $chapterRepository;
        $this->moduleRepository = $moduleRepository;
        $this->chapterService = $chapterService;
    }

    public function show(Request $request, $chapter_id)
    {
        $filter = $this->chapterService->getFilter($request);
        $sort = $this->chapterService->getSort($request);
        $modules = $this->moduleRepository->all();
        $questions = $this->chapterRepository->getQuestions($chapter_id, $filter, $sort);
        $questions = $this->chapterService->paginate($request, $questions);
        $active = 'chapters';
        return view('chapters.show', compact(['modules', 'questions', 'chapter_id', 'active', 'filter', 'sort']));
    }
}

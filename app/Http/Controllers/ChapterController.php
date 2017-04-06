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
        $this->chapterRepository = $chapterRepository;
        $this->moduleRepository = $moduleRepository;
        $this->chapterService = $chapterService;
    }

    public function show(Request $request, $chapter_id)
    {
        $difficulty = $this->chapterService->getDifficulty($request);
        $modules = $this->moduleRepository->all();
        $questions = $this->chapterRepository->getQuestions($chapter_id, $difficulty);
        dd($questions);
        return view('chapters.show', compact(['modules', 'questions', 'difficulty', 'chapter_id']));
    }
}

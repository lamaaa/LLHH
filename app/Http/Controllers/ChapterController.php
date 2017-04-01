<?php

namespace App\Http\Controllers;

use App\Repositorys\ChapterRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    protected $chapterRepository;

    public function __construct(ChapterRepository $chapterRepository)
    {
        $this->chapterRepository = $chapterRepository;
    }

    public function show($chapter_id)
    {
        $questions = $this->chapterRepository->getQuestions($chapter_id);
        return $questions->toJson(JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    }
}

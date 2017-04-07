<?php

namespace App\Http\Controllers;

use App\Repositorys\RecordRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecordController extends Controller
{
    protected $recordRepository;

    public function __construct(RecordRepository $recordRepository)
    {
        $this->middleware('auth');
        $this->recordRepository = $recordRepository;
    }

    public function store(Request $request)
    {
        $resultCode = $this->recordRepository->addRecord($request);
        return $resultCode;
    }
}

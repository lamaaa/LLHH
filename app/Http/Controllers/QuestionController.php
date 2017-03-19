<?php

namespace App\Http\Controllers;

use App\Models\ChoiceQuestion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index(){
        $choiceQuestions = ChoiceQuestion::all();

        return view('tests.list', [
            'choiceQuestions' => $choiceQuestions
        ]);
    }
}

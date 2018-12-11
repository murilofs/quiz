<?php

namespace App\Http\Controllers;

use App\Question;
use App\Serie;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function home()
    {
        return view('quiz', [
            'questions' => Question::all()
        ]);
    }

    public function quiz(Request $request)
    {
        return Serie::getDescription($request->input('question-5'))->description;
    }
}
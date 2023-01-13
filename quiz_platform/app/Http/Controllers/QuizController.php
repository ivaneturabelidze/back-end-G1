<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


session_start();

class QuizController extends Controller
{
    function quizMain(Request $req){
        $quiz = DB::table('quizzes')->where('id', $req->quiz_id)->first();
        $owner = DB::table('users')->where('id', $quiz->user_id)->first();
        $user = Auth::user();
        return view('quizMain', ['quiz' => $quiz, 'owner' => $owner, 'user' => $user]);
    }
    
    function quiz(Request $req){
        $quiz = DB::table('quizzes')->where('id', $req->quiz_id)->first();
        $question_position = 0;
        do{
            $question_position++;
            $q = DB::table('questions')->where([
                ['quiz_id', $quiz->id],
                ['position', $question_position]
            ])->first();
        }while($q);
        $question_quantity = $question_position - 1;
        $question = DB::table('questions')->where([
            ['quiz_id', $quiz->id],
            ['position', $req->question_position]
        ])->first();

        $message = null;
        
        if($req->answer){
            foreach($_SESSION as $key => $value){
                if($key == "{$quiz->id}_{$question->position}"){
                    $message = 'შეკითხვაზე პასუხი უკვე გაცემულია';
                }
            }
            if(!$message){
                $_SESSION["{$quiz->id}_{$question->position}"] = $req->answer;
            }
        }

        if(!Auth::user()) return view('noAuth');

        return view('quiz', ['quiz' => $quiz, 'question' => $question, 'question_quantity' => $question_quantity, 'answer' => $req->answer, 'message' => $message]);
    }

    function endQuiz(Request $req){
        $quiz = DB::table('quizzes')->where('id', $req->quiz_id)->first();
        $user = Auth::user();
        $questions = DB::table('questions')->where('quiz_id', $quiz->id)->get();
        $correct_answers = 0;
        foreach($_SESSION as $key => $value){
            foreach($questions as $q){
                if($key == "{$quiz->id}_{$q->position}"){
                    if($value == $q->correct_answer){
                        $correct_answers++;
                        break;
                    }
                }
            }
        }

        if(!Auth::user()) return view('noAuth');

        return view('endQuiz', ['quiz' => $quiz, 'user' => $user, 'correct_answers' => $correct_answers]);
    }
}

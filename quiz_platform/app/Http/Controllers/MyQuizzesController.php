<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\quiz;
use App\Models\question;


class MyQuizzesController extends Controller
{
    function getMyQuizzes(){
        if(!Auth::user()) return view('noAuth');
        $quizzes = DB::table('quizzes')->where('user_id', Auth::user()->id)->get();
        $questions = DB::table('questions')->get();
        return view('myQuizzes', ['quizzes' => $quizzes, 'questions' => $questions]);
    }

    function createNewQuiz(Request $req){
        return view('newQuizForm', ['questionCount' => $req->question_count]);
    }

    function postMyQuizzes(Request $req){
        if(!Auth::user()) return view('noAuth');
        $quiz_id = DB::table('quizzes')->insertGetId([
            'title' => $_REQUEST['title'],
            'picture' => $_REQUEST['picture'],
            'description' => $_REQUEST['description'],
            'user_id' => Auth::user()->id,
            'created_at' => DB::raw('current_timestamp'),
            'updated_at' => DB::raw('current_timestamp'),
        ]);

        for($i=1; $i <= $_REQUEST["question_count"]; $i++){
            DB::table('questions')->insert([
                'question' => $_REQUEST["question_$i"],
                'picture' => $_REQUEST["picture_$i"],
                'answer_1' => $_REQUEST["answer_{$i}_1"],
                'answer_2' => $_REQUEST["answer_{$i}_2"],
                'answer_3' => $_REQUEST["answer_{$i}_3"],
                'answer_4' => $_REQUEST["answer_{$i}_4"],
                'correct_answer' => $_REQUEST["correct_answer_$i"],
                'position' => $i,
                'quiz_id' => $quiz_id
            ]);
        }
        $message = 'ქვიზი წარმატებით დაემატა';

        return redirect('/myQuizzes')->with('message', 'ქვიზი წარმატებით დაემატა');
    }

    function deleteQuiz(Request $req){
        DB::table('questions')->where('quiz_id', $req->quiz_id)->delete();
        DB::table('quizzes')->where('id', $req->quiz_id)->delete();

        return redirect('/myQuizzes')->with('message', 'ქვიზი წარმატებით წაიშალა');
    }

    function getEditQuiz(Request $req){
       $quiz = DB::table('quizzes')->where('id', $req->quiz_id)->first();
       $questions =  DB::table('questions')->where('quiz_id', $req->quiz_id)->get();

       return view('editQuizForm', ['quiz' => $quiz, 'questions' => $questions]);
    }

    function postEditQuiz(Request $req){
        $quiz = quiz::find($req->quiz_id);
        $quiz->title = $req->title;
        $quiz->description = $req->description;
        $quiz->picture = $req->picture;
        $quiz->save();

        $questions =  question::where('quiz_id', $req->quiz_id)->get();
        foreach($questions as $question){
            $question->question = $req["question_$question->position"];
            $question->picture = $req["picture_$question->position"];
            $question->answer_1 = $req["answer_{$question->position}_1"];
            $question->answer_2 = $req["answer_{$question->position}_2"];
            $question->answer_3 = $req["answer_{$question->position}_3"];
            $question->answer_4 = $req["answer_{$question->position}_4"];
            $question->correct_answer = $req["correct_answer_$question->position"];
            $question->save();
        }

        return redirect('/myQuizzes')->with('message', 'ქვიზი წარმატებით განახლდა');
    }
}
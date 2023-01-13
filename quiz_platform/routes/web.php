<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MyQuizzesController;

/*
|--------------------------------------------------------------------------
| Web Routes                                                               
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        $auth = true;
    }else{
        $auth = false;
    }
    $quizzes = DB::table('quizzes')->where('user_id', 1)->get();
    $questions = DB::table('questions')->get();
    return view('welcome', ['auth' => $auth, 'quizzes' => $quizzes, 'questions' => $questions]);
});

Route::get('/quizMain', [QuizController::class, 'quizMain']);

Route::get('/quiz', [QuizController::class, 'quiz']);

Route::get('/myQuizzes', [MyQuizzesController::class, 'getMyQuizzes']);

Route::get('/newQuiz', [MyQuizzesController::class, 'createNewQuiz']);

Route::post('/myQuizzes', [MyQuizzesController::class, 'postMyQuizzes']);

Route::get('/deleteQuiz', [MyQuizzesController::class, 'deleteQuiz']);

Route::get('/editQuiz', [MyQuizzesController::class, 'getEditQuiz']);

Route::post('/editQuiz', [MyQuizzesController::class, 'postEditQuiz']);

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('/endQuiz', [QuizController::class, 'endQuiz']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

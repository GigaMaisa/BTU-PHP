<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', [AuthController::class, "signup"])->name("signup");
Route::post('/signup', [AuthController::class, "signupHandling"]);
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "loginHandling"]);

Route::middleware('auth')->group(function () {
    Route::get('/quizzes', [QuizController::class, 'mainPageQuizIndex'])->name("quizzes.index");
    Route::get('/quizzes/create', [QuizController::class, 'createNewQuiz'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'storeQuiz'])->name('quizzes.store');
    Route::post('/quizzes/{quiz}/publish', [QuizController::class, 'publishNewQuiz'])->name('quizzes.publish');
    Route::get('/pending', [QuizController::class, 'pendingQuiz'])->name('quizzes.pending');
    Route::delete('/pending/{quiz}', [QuizController::class, 'deleteQuiz'])->name('quizzes.destroy');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'editQuiz'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'updateQuiz'])->name('quizzes.update');
    Route::get('/questions/create', [QuestionController::class, 'createQuestion'])->name('questions.create');
    Route::post('/questions', [QuestionController::class, 'storeQuestion'])->name('questions.store');
    Route::get('/questions/all', [QuestionController::class, 'allQuestions'])->name('questions.all');
    Route::put('question/{id}', [QuestionController::class, 'updateQuestion'])->name('question.update');
    Route::get('/quizzes/{id}', [QuizController::class, 'showQuiz'])->name('quizzes.show');
    Route::post('/quizzes/{quiz}/attempt', [QuizController::class, 'startQuiz'])->name('quizzes.attempt');
    Route::post('/quizzes/{quiz}/result', [QuizController::class, 'resultOfQuiz'])->name('quizzes.result');
});





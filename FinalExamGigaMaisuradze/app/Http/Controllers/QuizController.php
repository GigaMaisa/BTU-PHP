<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{


    public function mainPageQuizIndex() {
        $quizzes = Quiz::where('is_published', true)->orderBy('created_at', 'desc')->get();

        return view('quizzes.index', ['quizzes' => $quizzes]);
    }

    public function showQuiz($id) {
        $quiz = Quiz::find($id);

        return view('quizzes.show', ['quiz'=>$quiz]);
    }

    public function startQuiz(Quiz $quiz) {
        return view('quizzes.attempt', [
            'quiz' => $quiz,
            'questions' => $quiz->questions->sortBy('position'),
        ]);
    }

    public function resultOfQuiz(Quiz $quiz, Request $request) {
        $answers = $request->input('answers');
        $score = 0;

        foreach ($answers as $question => $answer) {
            $question = $quiz->questions()->where('question', $question)->first();
            if ($question->correct_answer == $answer) {
                $score++;
            }
        }

        return view('quizzes.result', [
            'quiz' => $quiz,
            'score' => $score,
            'total' => $quiz->questions->count(),
        ]);
    }


    public function createNewQuiz() {
        return view('quizzes.create');
    }

    public function storeQuiz(Request $request) {
        $request->validate([
            'name' => 'required',
            'picture' => 'required',
            'description' => 'required',
        ]);

        $quiz = Quiz::create([
            'name' => $request->name,
            'picture' => $request->picture,
            'description' => $request->description,
            'author_id' => auth()->id(),
        ]);

        return redirect()->route('quizzes.index');
    }


    public function publishNewQuiz(Quiz $quiz) {
        $quiz->update(['is_published' => true]);

        return redirect()->route('quizzes.index');
    }

    public function pendingQuiz(){
        if (Auth::id() === 1) {
            $quizzes = Quiz::all();
        } else {
            $quizzes = Quiz::where('author_id', Auth::id())->get();
        }

        return view('quizzes.pending', ['quizzes' => $quizzes]);
    }

    public function deleteQuiz(Quiz $quiz)
    {
        $questions = Question::where('quiz_id', $quiz->id)->get();

        if ($questions->count() > 0) {
            Question::where('quiz_id', $quiz->id)->delete();
        }

        $quiz->delete();
        return back();
    }


    public function editQuiz(Quiz $quiz){
        if ($quiz->author_id !== Auth::id()) {
            return redirect()->route('quizzes.index');
        }

        return view('quizzes.edit', ['quiz' => $quiz]);
    }

public function updateQuiz(Request $request, Quiz $quiz) {
    if ($quiz->author_id !== Auth::id()) {
        return redirect()->route('quizzes.index');}

    $quiz->update($request->all());
    return redirect()->route('quizzes.show', $quiz);
    }
}

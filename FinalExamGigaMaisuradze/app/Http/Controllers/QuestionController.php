<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{


    public function allQuestions() {
        if (Auth::id() === 1) {
        $questions = Question::all();
        $quizzes = Quiz::all();
        return view('questions.all', ['questions'=>$questions, "quizzes"=>$quizzes]);
        }
        else{
            return redirect()->route("quizzes.index");
        }
    }


    public function createQuestion() {
        if (auth()->user()->id == 1) {
            $quizzes = Quiz::all();
        } else {
            $quizzes = Quiz::where('author_id', auth()->user()->id)->get();
        }

        return view('questions.create', ['quizzes' => $quizzes]);
    }


    public function storeQuestion(Request $request) {
        $question = new Question;
        $question->question = $request->question;
        $question->picture = $request->picture;
        $question->answer1 = $request->answer1;
        $question->answer2 = $request->answer2;
        $question->answer3 = $request->answer3;
        $question->answer4 = $request->answer4;
        $question->position = $request->position;
        $question->correct_answer = $request->correct_answer;
        $question->quiz_id = $request->quiz_id;
        $question->save();

        return redirect()->route('questions.create');
    }


    public function updateQuestion(Request $request, int $id){
        $question = Question::find($id);
        $question->update([
            'quiz_id' => $request->quiz_id,
        ]);
        $question->save();
        return back();

    }
}

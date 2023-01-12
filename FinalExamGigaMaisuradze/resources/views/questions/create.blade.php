<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Quiz Questions</title>
</head>
<body>
    <h1>Create Quiz Question</h1>


    <form action="{{ route('questions.store') }}" method="post">
        @csrf

        <div>
            <label for="question">Question</label>
            <input type="text" name="question" value="{{ old('question') }}">
        </div>

        <div>
            <label for="picture">Picture</label>
            <input type="text" name="picture" value="{{ old('picture') }}">
        </div>

        <div>
            <label for="answer1">Answer 1</label>
            <input type="text" name="answer1" value="{{ old('answer1') }}">
        </div>

        <div>
            <label for="answer2">Answer 2</label>
            <input type="text" name="answer2" value="{{ old('answer2') }}">
        </div>

        <div>
            <label for="answer3">Answer 3</label>
            <input type="text" name="answer3" value="{{ old('answer3') }}">
        </div>

        <div>
            <label for="answer4">Answer 4</label>
            <input type="text" name="answer4" value="{{ old('answer4') }}">
        </div>

        <div>
            <label for="position">Position</label>
            <input type="number" name="position" value="{{ old('position') }}">
        </div>

        <div>
            <label for="correct_answer">Correct Answer</label>
            <input type="number" name="correct_answer" value="{{ old('correct_answer') }}">
        </div>

            <div>
                <label for="quiz_id">Quiz</label>
                <label>
                    <select name="quiz_id">
                        @foreach ($quizzes as $quiz)
                            <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

        <button type="submit">Create Question</button>
    </form>
</body>
</html>

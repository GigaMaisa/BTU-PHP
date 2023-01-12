<?php

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Create a quiz
        $quiz = Quiz::create([
            'name' => 'My Quiz',
            'picture' => 'https://example.com/quiz.jpg',
            'description' => 'This is my quiz!',
            'author_id' => 1,
        ]);

        // Create some questions for the quiz
        $quiz->questions()->createMany([
            [
                'question' => 'With which country Spain doesnt share border?',
                'picture' => 'https://www.railpass.com/sites/default/files/2016-06/SPAIN.jpg',
                'answer1' => 'Morocco',
                'answer2' => 'France',
                'answer3' => 'Denmark',
                'answer4' => 'Andorra',
                'position' => 1,
                'correct_answer' => 3,
            ],
            [
                'question' => 'Which is the longest river in North America?',
                'picture' => 'https://o.quizlet.com/CzyZbUsHIGiG0f1ptj62DQ_b.png',
                'answer1' => 'Yukon River',
                'answer2' => 'Missouri',
                'answer3' => 'Colorado River',
                'answer4' => 'Mississippi',
                'position' => 2,
                'correct_answer' => 2,
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $quiz = Quiz::create([
            'name' => 'Quiz about Geography',
            'picture' => 'https://img.freepik.com/premium-vector/quiz-comic-pop-art-style_175838-505.jpg?w=2000',
            'description' => 'This is quiz bout my fav subject in school',
            'author_id' => 1,
        ]);

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

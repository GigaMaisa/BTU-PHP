<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
        'id' => 1,
        'email' => 'admin@example.com',
        'password' => bcrypt('admin'),
    ]);

        $quiz = Quiz::create([
            'name' => 'Geography knowledge quiz',
            'picture' => 'https://parade.com/.image/t_share/MTkwNTgwODk4NzA0NDAyMzAw/easy-geography-trivia-questions.jpg',
            'description' => 'this quiz tests your knowledge in geography, have fun!',
            "is_published" => true,
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

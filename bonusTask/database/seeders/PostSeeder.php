<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "title"=>"F1 qualifying results: Max Verstappen takes Abu Dhabi GP pole",
            "body"=>"Verstappen will start ahead of teammate Sergio Perez and Ferrari’s Charles Leclerc after the one-hour qualifying session, which is split into three segments with five cars each being knocked out in Q1 and Q2 before the top-10 shootout of Q3.On the first runs, Sainz took provisional pole with 1m24.281s, ahead of Perez – who had a big moment at the final corner – and Leclerc. Verstappen then took over at the front with a lap of 1m23.988s, almost three tenths clear of the others.
            On the final runs, Verstappen improved to 1m23.824s and was joined on the front row by Perez on 1m24.052s, who was 0.228s slower. Leclerc took P3 with 1m24.092s, beating Sainz who didn’t improve on his final lap. Hamilton jumped up to fifth with 1m24.508s.
            George Russell will start sixth, ahead of Lando Norris (McLaren), Esteban Ocon (Alpine), Sebastian Vettel (ninth for his final GP with Aston Martin) and Daniel Ricciardo (McLaren, who has a three-place grid penalty for his clash with Magnussen at Interlagos).",
            "author"=>"Charles Bradley",
            "active"=>0
        ]);

        Post::create([
            "title"=>"Hamilton escapes F1 grid penalty for Abu Dhabi FP3 red flag breach",
            "body"=>"Hamilton was summoned by the stewards following FP3 at the Yas Marina Circuit after he overtook Lando Norris and Kevin Magnussen when a red flag was thrown during the session.
            Hamilton was on a flying lap, and passed both drivers on the right-hand side of the track before slowing down, with such an infringement typically resulting in a grid penalty.
            But after analysing the data and talking to Hamilton about the incident, the stewards found that he did everything he could to slow down in a safe manner, prompting them to take no action",
            "author"=>"Luke Smith",
            "active"=>1
        ]);

        Post::create([
            "title"=>"Spa and Baku part of F1’s six sprint venues for 2023",
            "body"=>"With the FIA having recently given the green light for the number of sprints to expand next year from the current three, F1 chiefs have been carefully considering where best to hold the events.
            During a meeting of the F1 Commission in Abu Dhabi on Friday, part of the discussions were devoted to plans for the 2023 season and where the sprints should take place.",
            "author"=>"Jonathan Noble",
            "active"=>0
        ]);

        Post::create([
            "title"=>"Why Leclerc’s bid to beat Perez to second looks harder after day one in Abu Dhabi",
            "body"=>"A look beyond the timing screens should also indicate that all is not sweetness and light for Leclerc. He was struggling with the massive stop into the Turn 6-7 chicane as his mediums bedded in. He locked up the inside-left tyre repeatedly, including a string of three consecutive laps. That prompted a question to his race engineer to ask why Ferrari was so slow. The response was not encouraging: 'Our pace is not great at the moment'. But at least that owned the malaise.
            A crumb of comfort is provided by the tyre degradation, for which sources suggest that the F1-75s are holding onto its grip for longer than the Mercedes. But, ultimately, where Perez versus Leclerc is concerned, it's behind the Red Bulls in this respect also.",
            "author"=>"Matt Kew",
            "active"=>1
        ]);



    }
}

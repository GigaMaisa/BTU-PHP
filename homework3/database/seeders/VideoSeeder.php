<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;


class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            "url" => "https://www.youtube.com/watch?v=pXMEXCT5ohY&ab_channel=RedHotChiliPeppers",
            "title" => "Red Hot Chili Peppers - Eddie (Official Audio)" ,
            "channel" => "Red Hot Chili Peppers",
            "description" => "fficial audio for Red Hot Chili Peppers new song 'EDDIE' from the new album 'Return of the Dream Canteen' Out Now at https://rhcp.lnk.to/DreamCanteen

                Director: @PPPANIK @theofficialnitsch @fend.studio
                Creative Director: @auraT-09
                Live Video Director: George Elizondo
                Video Engineer: Shane Watson
                Crew Chief: Mike Wilson",
            "likes" => 74000,
            "length" => "5:41"
        ]);

        Video::create([
            "url" => "https://www.youtube.com/watch?v=AI3JzYCL3K0&ab_channel=FORMULA1",
            "title" => "Lewis Hamilton's Stunning Pole Lap | 2018 Singapore Grand Prix" ,
            "channel" => "FORMULA 1",
            "description" => "After Red Bull and Ferrari dominated practice, not many predicted pole position for Lewis Hamilton in Singapore. Over to the Mercedes man himself for an earth-shattering lap of Marina Bay...

            For more F1® videos, visit http://www.Formula1.com
            
            Like F1® on Facebook: https://www.facebook.com/Formula1/
            
            Follow F1® on Twitter: http://www.twitter.com/F1
            
            Follow F1® on Instagram: http://www.instagram.com/F1
            
            #F1 #SingaporeGP",
            "likes" => 46000,
            "length" => "1:59"
        ]);

        Video::create([
            "url" => "https://www.youtube.com/watch?v=yN7tTNecfJo&ab_channel=FORMULA1",
            "title" => "Hamilton vs Verstappen: Title Fight Finale | 2021 Abu Dhabi Grand Prix" ,
            "channel" => "FORMULA 1",
            "description" => "One last dance. It's winner takes all this weekend in Abu Dhabi as either Lewis Hamilton or Max Verstappen will be crowned World Champion!

            For more F1® videos, visit http://www.Formula1.com
            
            Follow F1®:
            http://www.instagram.com/F1
            https://www.facebook.com/Formula1/
            http://www.twitter.com/F1
            https://www.twitch.tv/formula1
            https://www.tiktok.com/@f1",
            "likes" => 65000,
            "length" => "5:06"
        ]);

        Video::create([
            "url" => "https://www.youtube.com/watch?v=ks_qOI0lzho&ab_channel=TheCureVEVO",
            "title" => "The Cure - Lovesong" ,
            "channel" => "The Cure",
            "description" => "Order The Cure’s expanded edition of Mixed Up here: https://lnk.to/MixedUp 

            Explore more music from The Cure: https://lnk.to/TheCureHits 
            
            Follow The Cure: 
            Spotify - https://TheCure.lnk.to/Spotify 
            Facebook - https://TheCure.lnk.to/FB 
            Twitter - https://TheCure.lnk.to/Twitter 
            
            
            Music video by The Cure performing Lovesong. (C) 1989 Fiction Records Ltd. under exclusive licence to Polydor Ltd. (UK)",
            "likes" => 378000,
            "length" => "3:28"
        ]);

        Video::create([
            "url" => "https://www.youtube.com/watch?v=SlDGA8AUuBM&ab_channel=Redmar",
            "title" => "The Strokes - Trying Your Luck" ,
            "channel" => "Redmar",
            "description" => "The Strokes - Is This It (2001) - Trying Your Luck
            Music",
            "likes" => 2800,
            "length" => "3:27"
        ]);

        Video::create([
            "url" => "https://youtu.be/Y8x8QPYhu-Y?t=2499",
            "title" => "Molchat Doma @ PIN TV | Taksirat Festival 2020" ,
            "channel" => "Taksirat Festival",
            "description" => "Molchat Doma with a special performance, made exclusively for PIN TV. 

            Molchat Doma, founded in 2017 in Minsk, Belarus, stands at the intersection of post-punk, new-wave and synth-pop. Dark & danceable, with a heavy dose of goth ethos, their music is reminiscent of the masters that predate them, but make no mistake: Molchat Doma creates a sound and meaning that is immediately recognizable as all their own.
            ",
            "likes" => 18000,
            "length" => "52:31"
        ]);

        Video::create([
            "url" => "https://youtu.be/1YKI0zM36Tc",
            "title" => "Leclerc's Epic Battle With Mercedes: 2019 Italian Grand Prix" ,
            "channel" => "FORMULA 1",
            "description" => "Charles Leclerc won at Monza to send the home fans wild - but it wasn't easy as both Mercedes drivers tested him to the limit...",
            "likes" => 49000,
            "length" => "3:58"
        ]);

        Video::create([
            "url" => "https://www.youtube.com/watch?v=lPJV6pTFRPc&ab_channel=makemealobotomy",
            "title" => "Mareux – The Perfect Girl {speed up & bass}" ,
            "channel" => "make me a lobotomy",
            "description" => "Dec 19, 2021",
            "likes" => 74000,
            "length" => "3:01"
        ]);

        Video::create([
            "url" => "https://youtu.be/CelgqNnv0wU",
            "title" => "aughhhhh" ,
            "channel" => "AUGH",
            "description" => "Feb 17, 2022",
            "likes" => 78000,
            "length" => "0:10"
        ]);

        Video::create([
            "url" => "https://youtu.be/E5aEiT2VaKk",
            "title" => "DragonLore მოვიგე სოსოოოოო" ,
            "channel" => "Nikusha Tvaltvadze",
            "description" => "Mar 25, 2018",
            "likes" => 138,
            "length" => "0:39"
        ]);

        Video::create([
            "url" => "https://youtu.be/oia6HnsCxpI",
            "title" => "სკანდალური აუდიოჩანაწერი!!! მიხეილ სააკაშვილისა და თემურ ალასანია ქართველ ხალხზე" ,
            "channel" => "Temur Charelashvili",
            "description" => "მიხეილ სააკაშვილი: გვარამია ხო არ გამოჩენილა? ხო არ გილაპარაკია? დაწყნარდა ბოლომდე?
            თემურ ალასანია: ძაან სწორი აზრზეა, ძაან კარგად არის. უსმენს ამათ, მაგრამ არაფერს ამათ მიხედვით არ აკეთებს. ამიტომ ჩვენ, ერთადერთი ნიშა ჩვენი არიო რადიკალიზაცია საზოგადოების 
            მიხეილ სააკაშვილი: მოახდინოს რადიკალიზაცია. რადიკალიზაცია გამოიწვევს ქაოსს რა
            თემურ ალასანია: აი როგორი იცი? ნამდვილად იმიტომ, რომ ფეხზე დავდგებით. აი ნახავ თუ არა
            მიხეილ სააკაშვილი: კვესიტაძე არის ის, რაც უნდა იყოს აწი პროპაგანდა სულ. მარა, ასევე რაღაცა სეგმენტი გვინდა პროპაგანდის, თბილისის “Middle-class”-ისთვის და უნდა ვისწავლოთ ასევე ინტერნეტ-სეგმენტის გამოყენება.
            თემურ ალასანია: ზუსტად ეგრეა
            მიხეილ სააკაშვილი: ჩვენ ორი ელემენტის გაძლიერება გვჭირდება: რევოლუციური ახალგაზრდობის და მეორე, თბილისის “middle class“-ის იმიტომ, რომ საბოლოო ჯამში რევოლუციას ეგენი ახდენენ. მანდ გვაქვს სერიოზული ჩავარდნა იმიტომ, რომ ამათ წარმოიდგინეს, რომ  თბილისი ეს არის ბაზრობებზე სიარული და გლდანის მეტროში და ეგ, ეგრე არ არის. ისიც არის, მაგრამ გადამწყვეტი რევოლუციური მუხტი არის აი ეს “Self made“ ბიზნესები თბილისის ცენტრში.
            თემურ ალასანია: ჩვენი მომხრეები ეგენი არ არიან, თავიდანვე გითხარი. აი, ძალიან კარგად ვიცი, რომ ეს არ გამოვა.
            მიხეილ სააკაშვილი: და თან, ამ სირებს რომ ჰგონიათ, რომ ამათთან რაღაც დიდს  მიაღწევ. 
            თემურ ალასანია: არა. ეს არის „ავანტყოფი“ ერია რა. ეს არის... ამათ სანამ არ დაა...ვამ თავზე და სანამ დედას არ მოუ...ავ, ვერ იგებენ ვერაფერს რა
            მიხეილ სააკაშვილი: ეგრე იყო ეგ ხალხი მთელი ცხოვრება და ეხლა რატომ იქნება...
            თემურ ალასანია: მაგათი დედა მოვ...ან მე ქართველების „პროსტა“. ქართველების დედა მოვ...ან „პროსტა“. ვინ არიან ესენი ტო? ეს „ავანტყოფი“ ერი ვინ არის ტო? დავიღალე იცი „პროსტა“ აი ცდისგან. ვზივარ, ვზივარ, ვზივარ. რაღაც ზარებს ველოდები რაღაცას. მივდივარ-მოვდივარ... სულ რაღაცა ხვალ-ზეგ, აი ეხლა მოხდება, აი ეხლა მოხდება...
            მიხეილ სააკაშვილი: ამათ სულ აჭრილი აქვთ ყველაფერი, რამსები. არიან რაღაცა... ეს არჩევნები კიდე უფრო დააბნევთ იმიტომ, რომ დააყენეს უსუსტესი კანდიდატი და ცუდი კამპანია აქვთ. ისა რა ქვია...
            თემურ ალასანია: დავიღალე. იმიტომ კი არა, რომ ცუდად არის რამე საქმე? არა! „პროსტა“ აი ცდამ დამღალა. სულ რაღაცას ვუცდი. ერთ მილიონს გადავუხდი, ვინც „სნაიპერსკი ვინტოვკით“ მოკლავს ბიძინას. „პროსტა“, “Simple as that”. “Simple as that”.
            მიხეილ სააკაშვილი: ეხლა ჟურნალისტებს მიხედე ჯობია და გვარამიას.",
            "likes" => 114,
            "length" => "1:58"
        ]);
    }
}

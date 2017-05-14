<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'title' => 'Wow!',
            'comment' => 'Dude, I\'ve always thought the same /Anon',
            'blogpost_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('comments')->insert([
            'title' => 'Yeah it taste like heaven!',
            'comment' => 'Single Malt > Singelton every day! /DragonSlayer1337',
            'blogpost_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('comments')->insert([
            'title' => 'You all drunk people',
            'comment' => 'Hey I thought this was a devblog, not a AA forum..',
            'blogpost_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


         DB::table('comments')->insert([
            'title' => 'Well it is crap...',
            'comment' => 'I it is crap, really, just look at this website how crappy PHP sites really is. You should all look at Facebook and use whatever they are using because it is the best!',
            'blogpost_id' => 2,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
      



         DB::table('comments')->insert([
            'title' => 'Cool game, bruh!',
            'comment' => 'Hey I love your game man, I will support ya on ya patreon page! I also subbed and smashed that like button.',
            'blogpost_id' => 3,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}

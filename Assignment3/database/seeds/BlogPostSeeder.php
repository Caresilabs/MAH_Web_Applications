<?php

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('blogposts')->insert([
            'title' => 'Why Singleton is a tasy whisky, but a crappy pattern',
            'body' => '<b>You all know it\'s true</b>',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('blogposts')->insert([
            'title' => 'Why PHP should have died long time ago',
            'body' => '<b>Just kidding</b>, hey clickbaits sells!',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

         DB::table('blogposts')->insert([
            'title' => 'My new game!',
            'body' => 'Check it out on <a href="https://caresilabs.com/the-adventures-in-terralands">Find out more here!</a>',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}

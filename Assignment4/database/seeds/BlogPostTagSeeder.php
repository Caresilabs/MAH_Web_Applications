<?php

use Illuminate\Database\Seeder;

class BlogPostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('blogpost_tag')->insert([
            'tag_id' => 1,
            'blogpost_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

         DB::table('blogpost_tag')->insert([
            'tag_id' => 3,
            'blogpost_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


         DB::table('blogpost_tag')->insert([
            'tag_id' => 5,
            'blogpost_id' => 2,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

         DB::table('blogpost_tag')->insert([
            'tag_id' => 2,
            'blogpost_id' => 3,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}

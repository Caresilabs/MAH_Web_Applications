<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Design Patterns',
            'isSuperNerdy' => false,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'Shader Inspo',
            'isSuperNerdy' => true,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'Bad Design',
            'isSuperNerdy' => false,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'Procedural Content Generation',
            'isSuperNerdy' => false,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


        DB::table('tags')->insert([
            'name' => 'Random',
            'isSuperNerdy' => false,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}

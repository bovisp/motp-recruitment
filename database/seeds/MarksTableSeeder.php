<?php

use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('marks')->insert([
        [
          'name' => 'case1',
          'score' => 30
        ],
        [
          'name' => 'image_url',
          'score' => 20
        ],
        [
          'name' => 'case2ex1',
          'score' => 20
        ],
        [
          'name' => 'naptt15',
          'score' => 15
        ],
        [
          'name' => 'case2ex2',
          'score' => 15
        ]
      ]);
    }
}

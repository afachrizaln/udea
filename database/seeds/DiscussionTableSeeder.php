<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('discussions')->insert([
            'chapter_id' => '1',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 20, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);

        DB::table('discussions')->insert([
            'chapter_id' => '1',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);

        DB::table('discussions')->insert([
            'chapter_id' => '2',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);

        DB::table('discussions')->insert([
            'chapter_id' => '3',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);

        DB::table('discussions')->insert([
            'chapter_id' => '3',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);

        DB::table('discussions')->insert([
            'chapter_id' => '3',
            'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
        ]);
    }
}

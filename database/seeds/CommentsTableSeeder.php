<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('comments')->insert([
            'user_id' => '2',
            'discussion_id' => '1',
            'comment' => $faker->realText($maxNbChars = 400, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'discussion_id' => '1',
            'comment' => $faker->realText($maxNbChars = 300, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);

        DB::table('comments')->insert([
            'user_id' => '2',
            'discussion_id' => '2',
            'comment' => $faker->realText($maxNbChars = 350, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'discussion_id' => '2',
            'comment' => $faker->realText($maxNbChars = 400, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);

        DB::table('comments')->insert([
            'user_id' => '2',
            'discussion_id' => '2',
            'comment' => $faker->realText($maxNbChars = 500, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'discussion_id' => '2',
            'comment' => $faker->realText($maxNbChars = 320, $indexSize = 2),
            'created_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now'),
        ]);
    }
}

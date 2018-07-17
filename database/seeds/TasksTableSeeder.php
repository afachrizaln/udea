<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '1',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);

        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '2',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);

        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '2',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);

        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '2',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);

        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '3',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);

        DB::table('tasks')->insert([
            'lecturer_id' => '1',
            'chapter_id' => '3',
            'title' => $title = $faker->realText($maxNbChars = 45, $indexSize = 2),
            'description' => $faker->realText($maxNbChars = 600, $indexSize = 2),
            'slug' => str_slug($title, '-'),
            'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-14 days'),
            'closed_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+7 days'),
        ]);
    }
}

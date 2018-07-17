<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCourses();
    }

    public function createCourses()
    {
        $faker = Faker::create();
        $title = array("Pengantar Ilmu Politik", "Sistem Politik Indonesia", "Otonomi Daerah");
        foreach (range(0,2) as $index) {
            DB::table('courses')->insert([
                'title' => $title[$index],
                'description' => $faker->realText($maxNbChars = 400, $indexSize = 2),
                'slug' => str_slug($title[$index], '-'),
                'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
            ]);
        }
    }

}

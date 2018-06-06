<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createChapter1();
        $this->createChapter2();
        $this->createChapter3();
    }

    public function createChapter1()
    {
        $faker = Faker::create();
        $title = array("Pengantar", "Konsep-Konsep", "Asal Mula");
        foreach (range(0,2) as $index) {
            DB::table('chapters')->insert([
                'title' => $title[$index],
                'course_id' => '1',
                'description' => $faker->realText($maxNbChars = 300, $indexSize = 2),
                'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
            ]);
        }
    }

    public function createChapter2()
    {
        $faker = Faker::create();
        $title = array("Sistem", "Perbandingan");
        foreach (range(0,1) as $index) {
            DB::table('chapters')->insert([
                'title' => $title[$index],
                'course_id' => '2',
                'description' => $faker->realText($maxNbChars = 220, $indexSize = 2),
                'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
            ]);
        }
    }

    public function createChapter3()
    {
        $faker = Faker::create();
        $title = array("Hukum yang Berlaku", "Kewajiban Pemerintah", "Perbandingan");
        foreach (range(0,2) as $index) {
            DB::table('chapters')->insert([
                'title' => $title[$index],
                'course_id' => '3',
                'description' => $faker->realText($maxNbChars = 130, $indexSize = 2),
                'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now'),
            ]);
        }
    }
}

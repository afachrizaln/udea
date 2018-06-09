<?php

use Illuminate\Database\Seeder;

class LecturerCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturer_courses')->insert([
            'lecturer_id' => '1',
            'course_id' => '1',
        ]);

        DB::table('lecturer_courses')->insert([
            'lecturer_id' => '1',
            'course_id' => '2',
        ]);

        DB::table('lecturer_courses')->insert([
            'lecturer_id' => '1',
            'course_id' => '3',
        ]);
    }
}

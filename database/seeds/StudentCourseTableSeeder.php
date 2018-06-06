<?php

use Illuminate\Database\Seeder;

class StudentCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_courses')->insert([
            'student_id' => '1',
            'course_id' => '1',
        ]);

        DB::table('student_courses')->insert([
            'student_id' => '1',
            'course_id' => '3',
        ]);
    }
}

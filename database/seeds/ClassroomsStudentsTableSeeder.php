<?php

use Illuminate\Database\Seeder;

class ClassroomsStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms_students')->insert([
            'classroom_id' => '1',
            'student_id' => '1',
        ]);

        DB::table('classrooms_students')->insert([
            'classroom_id' => '1',
            'student_id' => '2',
        ]);

        DB::table('classrooms_students')->insert([
            'classroom_id' => '3',
            'student_id' => '1',
        ]);
    }
}

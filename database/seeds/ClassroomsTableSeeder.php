<?php

use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'course_id' => '1',
            'lecturer_id' => '1',
            'name' => 'PIP-01',
            'public_key' => 'public_key1'
        ]);

        DB::table('classrooms')->insert([
            'course_id' => '1',
            'lecturer_id' => '1',
            'name' => 'PIP-02',
            'public_key' => 'public_key1'
        ]);

        DB::table('classrooms')->insert([
            'course_id' => '2',
            'lecturer_id' => '1',
            'name' => 'SIP-01',
            'public_key' => 'public_key3'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(SubChaptersTableSeeder::class);
        $this->call(LecturerCoursesTableSeeder::class);
        $this->call(StudentCoursesTableSeeder::class);
        $this->call(DiscussionsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}

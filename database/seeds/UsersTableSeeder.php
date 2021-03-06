<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createAdmin();
        $this->createLecturer();
        $this->createStudent();
    }

    public function createRoles()
    {
        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Admin',
                'slug'        => 'admin',
            ]
        );

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Lecturer',
                'slug'        => 'lecturer',
            ]
        );

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Student',
                'slug'        => 'student',
            ]
        );
    }

    public function createAdmin()
    {
        $credentials = [
			'no_academic' => '121110',
			'email' => 'udea@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Admin',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
		$user->roles()->attach($role);
    }

    public function createLecturer()
    {
        $this->createDefaultLecturer();
    }

    public function createDefaultLecturer()
    {   
        $credentials = [
			'no_academic' => '225225',
			'email' => 'akbarsilo@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Akbar',
            'last_name' => 'Silo',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('lecturer');
        $user->roles()->attach($role);
        
        DB::table('lecturers')->insert([
            'user_id' => '2',
            'code' => 'AKB'
        ]);
    }

    public function createStudent()
    {
        $this->createDefaultStudent();

        $gender = array("M","F");
        $religion = array("Islam","Kristen Protestan","Kristen Katolik", "Hindu", "Budha");
        foreach (range(4,12) as $index) {
            $faker = Faker::create();
            $s_gender = $gender[array_rand($gender)];
            $credentials = [
                'no_academic' => str_pad($index, 6, '0', STR_PAD_LEFT),
                'email' => $faker->email,
                'password' => 'qwerty123',
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
            ];
    
            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug('student');
            $user->roles()->attach($role);
            
            DB::table('students')->insert([
                'user_id' => $index,
                'birth_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
                'address' => $faker->streetAddress,
                'city' => 'Jayapura',
                'province' => 'Papua',
                'gender' => $s_gender,
                'religion' => $religion[array_rand($religion)],
                'phone' => $faker->phoneNumber,
            ]);

        }
    }

    public function createDefaultStudent()
    {
		$credentials = [
			'no_academic' => '111111',
			'email' => 'student@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Azwar',
            'last_name' => 'Rizali',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('student');
        $user->roles()->attach($role);
        
        $faker = Faker::create();
        $gender = array("M","F");  
        $religion = array("Islam","Kristen Protestan","Kristen Katolik", "Hindu", "Budha");
        DB::table('students')->insert([
            'user_id' => '3',
            'birth_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format('Y-m-d'),
            'address' => $faker->streetAddress,
            'city' => 'Jayapura',
            'province' => 'Papua',
            'gender' => 'M',
            'religion' => 'Islam',
            'phone' => $faker->phoneNumber,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'anand',
                'email' => 'anand@example.com',
                'department_id' => 1,
                'designation_id' => 2,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'wilsion',
                'email' => 'wilsion@example.com',
                'department_id' => 2,
                'designation_id' => 1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'david',
                'email' => 'david@example.com',
                'department_id' => 2,
                'designation_id' => 3,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Abu',
                'email' => 'abu@example.com',
                'department_id' => 4,
                'designation_id' => 4,
                'password' => bcrypt('password'),
            ],
            // Add more users as needed
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

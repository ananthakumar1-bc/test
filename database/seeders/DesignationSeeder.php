<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            ['name' => 'Manager'],
            ['name' => 'Team Lead'],
            ['name' => 'Developer'],
            ['name' => 'Analyst'],
        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }
}

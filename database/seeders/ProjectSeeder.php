<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i = 0; $i < 10; $i++) {
            
            $project = new Project();

            $project->name = fake()->word();
            $project->company = fake()->company();
            $project->workers = fake()->randomDigit();
            $project->save();
        }
    }
}
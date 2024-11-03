<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        for ($i = 0; $i < 5; $i++) {

            Schema::withoutForeignKeyConstraints(function () {
                Type::truncate();
            });
            
            $type = new Type();

            $type->type = fake()->word();
            $type->category = fake()->randomLetter();
            $type->save();
        }
    }
}

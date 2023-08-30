<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {

            $student = new Student();

            $student->name = $faker->firstName();
            $student->surname = $faker->lastName();

            $student->save();
        }
    }
}

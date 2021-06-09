<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->truncate();

        $faker = Factory::create('id_ID');

        $gender = ['P', 'W'];

        $religion = ['Islam', 'Keristen', 'Katolik', 'Hindu', 'Ateis'];

        for ($i=0; $i < 20 ; $i++) {

            DB::table('students')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(17, 30),
                'class' => $faker->numberBetween(7, 15),
                'address' => $faker->address,
                'gender' => $faker->randomElement($gender),
                'religion' => $faker->randomElement($religion),
                'status' => $faker->boolean()
            ]);

        }

    }
}

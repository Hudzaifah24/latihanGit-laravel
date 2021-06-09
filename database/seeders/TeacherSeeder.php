<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('teacers')->truncate();

        $faker = Factory::create();

        for ($i=0; $i < 30; $i++) {

            DB::table('teacers')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(20, 40),
                'address' => $faker->address,
                'gender' => $faker->randomElement(['P', 'W']),
                'religion' => $faker->randomElement(['Islam', 'Keristen', 'Katolik', 'Hindu', 'Ateis']),
                'phone' => $faker->tollFreePhoneNumber,
                'email' => $faker->email,
                'birth_date' => $faker->date('Y-m-d', 'now'),
                'description' => $faker->text(100)
            ]);
        }
    }
}

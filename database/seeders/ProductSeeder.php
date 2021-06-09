<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->truncate();

        $faker = Factory::create();

        for ($i=0; $i < 20; $i++) {

                DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->numberBetween(5000, 500000),
                'product_date' => $faker->date('Y-m-d'),
                'expired' => $faker->dateTimeInInterval('-5 days','+ 2 years'),
                'type' => $faker->randomElement(['makanan','minuman','pakaian','alat_tulis']),
                'description' => $faker->text(100),
                'stock' => $faker->numberBetween(5, 10),
                'produser' => $faker->name,
                'address' => $faker->address,
                'postcode' => $faker->randomNumber,
                'status' => $faker->boolean()
            ]);
        }
    }
}

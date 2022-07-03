<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Product::truncate();


        $food = ['Apple Pie', 'Cheeseburgers', 'Pizza', 'Nashville Hot Chicken', 'Cornbread'];
        for ($i=0; $i < 5; $i++) { 
            Product::insert([
                'name' => $food[$i],
                'description' => $faker->sentence(2),
                'price' => mt_rand(5, 10) * 20000,
                'quantity' => mt_rand(5, 10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

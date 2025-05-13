<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $categoryIds = Category::pluck('id')->toArray();

        if (empty($categoryIds)) {
            Category::factory()->count(5)->create();
            $categoryIds = Category::pluck('id')->toArray();
        }

       
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name'        => $faker->words(3, true),
                'description' => $faker->sentence(10),
                'category_id' => $faker->randomElement($categoryIds),
                'price'       => $faker->randomFloat(2, 5, 500),
                'quantity'    => $faker->numberBetween(1, 100),
            ]);
        }
    }
}

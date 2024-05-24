<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Chicken Delight', 'description' => 'A delicious chicken dish.', 'price' => 10.99, 'image' => '/assets/media/products/p_1.png', 'category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Burger Bonanza', 'description' => 'A scrumptious burger loaded with toppings.', 'price' => 8.99, 'image' => '/assets/media/products/p_2.png', 'category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pizza Paradise', 'description' => 'A heavenly pizza with all your favorite toppings.', 'price' => 12.99, 'image' => '/assets/media/products/p_3.png', 'category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Spicy Chicken Wings', 'description' => 'Hot and spicy chicken wings.', 'price' => 7.99, 'image' => '/assets/media/products/p_4.png', 'category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cheesy Burger', 'description' => 'A burger with extra cheese.', 'price' => 9.49, 'image' => '/assets/media/products/p_5.png', 'category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Veggie Pizza', 'description' => 'A pizza loaded with fresh vegetables.', 'price' => 11.99, 'image' => '/assets/media/products/p_6.png', 'category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Grilled Chicken', 'description' => 'Perfectly grilled chicken.', 'price' => 10.49, 'image' => '/assets/media/products/p_7.png', 'category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Double Burger', 'description' => 'A burger with double patties.', 'price' => 10.99, 'image' => '/assets/media/products/p_8.png', 'category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pepperoni Pizza', 'description' => 'Classic pepperoni pizza.', 'price' => 13.49, 'image' => '/assets/media/products/p_9.png', 'category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'BBQ Chicken', 'description' => 'Chicken with BBQ sauce.', 'price' => 9.99, 'image' => '/assets/media/products/p_10.png', 'category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('products')->insert($products);
    }
}

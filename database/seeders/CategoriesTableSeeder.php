<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Chicken', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Burgers', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Pizza', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('categories')->insert($categories);
    }
}

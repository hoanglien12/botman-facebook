<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            ['name' => 'a', 'description' => 'a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'b', 'description' => 'b', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}

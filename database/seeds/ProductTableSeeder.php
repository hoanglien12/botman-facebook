<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'a', 'price' => 100,'photos'=>'jpg.png','id_product_cate' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}

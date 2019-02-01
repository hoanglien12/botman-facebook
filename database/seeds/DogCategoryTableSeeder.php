<?php

use Illuminate\Database\Seeder;

class DogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dog_categories')->insert([
            ['name' => 'c', 'description' => 'a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'd', 'description' => 'b', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}

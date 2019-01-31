<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            ['name' => 'a', 'price' => 100,'photos' => 'a.jpg','id_dog_cate'=> 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}

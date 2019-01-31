<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['address' => 'a', 'phone' => '09999','date'=>new Datetime,'total' => 100, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}

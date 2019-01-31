<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             DogCategoryTableSeeder::class,
             ProductCategoryTableSeeder::class,
             ProductTableSeeder::class,
             OrderTableSeeder::class,
             SiteConfigTableSeeder::class,
             RolesTableSeeder::class,
             PostsTableSeeder::class,
             DogTableSeeder::class,
         ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PortfolioTableSeeder::class);
         $this->call(ArticleTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
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
     //   \App\Models\User::factory(5)->create();

     // using factory 
     Category::factory(18)->create();
 


    // table seeder manualy 
    // php artesin db:seed
 //$this->call(CategoriesTableSeeder::class);
    }
}

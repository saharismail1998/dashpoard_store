<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * insert data not random    
     * @return void
     */
    public function run()
    {
        DB::table('catogries')->insert([
          'name'=>'category 1',
          'slug'=>'category-1',
          'parent_id'=>1,
        ]);

        Category::create([
            'name'=>'category 2',
          'slug'=>'category-2',
          'parent_id'=>1,
        ]);


    }
}

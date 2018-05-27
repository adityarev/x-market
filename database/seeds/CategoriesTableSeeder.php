<?php

use Illuminate\Database\Seeder;
use Xmarket\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'id' => 1,
            'category_name' => 'Fashion',
        ]);

        Category::create([
            'id' => 2,
            'category_name' => 'Elektronik',
        ]);

        Category::create([
            'id' => 3,
            'category_name' => 'Kesehatan',
        ]);

        Category::create([
            'id' => 4,
            'category_name' => 'Entertainment',
        ]);       
    }
}

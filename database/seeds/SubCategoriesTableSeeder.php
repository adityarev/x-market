<?php

use Illuminate\Database\Seeder;
use Xmarket\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'id' => 1,
            'category_id' => 1,
            'sub_category_name' => 'Fashion Pria',
        ]);

        SubCategory::create([
            'id' => 2,
            'category_id' => 1,
            'sub_category_name' => 'Fashion Wanita',
        ]);
    }
}

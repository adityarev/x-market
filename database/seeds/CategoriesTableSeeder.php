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

        Category::create([
            'id' => 5,
            'category_name' => 'Mainan dan Hobi',
        ])

        Category::create([
            'id' => 6,
            'category_name' => 'Rumah Tangga'
        ])

        Category::create([
            'id' => 7,
            'category_name' => 'Buku'
        ])

        Category::create([
            'id' => 8,
            'category_name' => 'Otomotif'
        ])

        Category::create([
            'id' => 9,
            'category_name' => 'Olahraga'
        ])

        Category::create([
            'id' => 10,
            'category_name' => 'Film dan Musik'
        ])
    }
}

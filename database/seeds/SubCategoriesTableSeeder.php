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
            'category_id' => 1,
            'sub_category_name' => 'Fashion Pria',
        ]);

        SubCategory::create([            
            'category_id' => 1,
            'sub_category_name' => 'Fashion Wanita',
        ]);
        
        SubCategory::create([            
            'category_id' => 2,
            'sub_category_name' => 'Handphone & Tablet',
        ]);

        SubCategory::create([            
            'category_id' => 2,
            'sub_category_name' => 'Laptop & Aksesoris',
        ]);

        SubCategory::create([            
            'category_id' => 2,
            'sub_category_name' => 'Komputer & Aksesoris',
        ]);

        SubCategory::create([            
            'category_id' => 3,
            'sub_category_name' => 'Kesehatan',
        ]);

        SubCategory::create([            
            'category_id' => 4,
            'sub_category_name' => 'Gaming',
        ]);

        SubCategory::create([            
            'category_id' => 4,
            'sub_category_name' => 'Buku',
        ]);

        SubCategory::create([            
            'category_id' => 4,
            'sub_category_name' => 'Film',
        ]);        
    }
}

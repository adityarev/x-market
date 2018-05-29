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
            'sub_category_name' => 'Film dan Musik',
        ]);        

        SubCategory::create([
            'category_id' => 5,
            'sub_category_name' => 'Mainan Anak'
        ])

        SubCategory::create([
            'category_id' => 5,
            'sub_category_name' => 'Figure'
        ])

        SubCategory::create([
            'category_id' => 6,
            'sub_category_name' => 'Dapur'
        ])

        SubCategory::create([
            'category_id' => 6,
            'sub_category_name' => 'Interior Rumah'
        ])
        
        SubCategory::create([
            'category_id' => 6,
            'sub_category_name' => 'Eksterior Rumah'
        ])
        
        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'souvenir acara'
        ])
        
        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'Kado'
        ])
        
        SubCategory::create([
            'category_id' => 8,
            'sub_category_name' => 'Mobil'
        ])
        
        SubCategory::create([
            'category_id' => 8,
            'sub_category_name' => 'Motor'
        ])

        SubCategory::create([
            'category_id' => 8,
            'sub_category_name' => 'Sepeda'
        ])

        SubCategory::create([
            'category_id' => 9,
            'sub_category_name' => 'Perlengkapan Olahraga'
        ])

        SubCategory::create([
            'category_id' => 9, 
            'sub_category_name' => 'Baju Olahraga'
        ])

        SubCategory::create([
            'category_id' => 10,
            'sub_category_name' => 'Game'
        ])

        SubCategory::create([
            'category_id' => 10
            'sub_category_name' => 'Aplikasi'
        ])
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Xmarket\Item;
use Xmarket\User;
use Xmarket\SubCategory;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $users = User::all()->pluck('username')->toArray();
        $subCategories = SubCategory::all()->pluck('id')->toArray();

        foreach(range(1,200) as $index){
            Item::create([                
                'sub_category_id'   => $faker->randomElement($subCategories),
                'item_seller'       => $faker->randomElement($users),            
                'item_name'         => $faker->unique()->name,
                'item_description'  => $faker->text,
                'item_price' => $faker->randomNumber(5),
                'item_rating' => 4.45,
            ]);
        }


        Item::create([
            'sub_category_id'   => 1,
            'item_seller'       => 'scott',            
            'item_name'         => 'Scott\'s Item 1',
            'item_description'  => 'Scott\'s First Item',
            'item_price' => 100000,
            'item_rating' => 4.45,
        ]);

        Item::create([
            'sub_category_id'   => 2,
            'item_seller'       => 'scott',
            'item_name'         => 'Scott\'s Item 2',
            'item_description'  => 'Scott\'s Second Item',
            'item_price' => 123456,
            'item_rating' => 4.49,
        ]);

        Item::create([
            'sub_category_id'   => 3,
            'item_seller'       => 'scott',
            'item_name'         => 'Scott\'s Item 3',
            'item_description'  => 'Scott\'s Third Item',
            'item_price' => 300000,
            'item_rating' => 3.25,
        ]);

        Item::create([
            'sub_category_id'   => 4,
            'item_seller'       => 'scott',
            'item_name'         => 'Scott\'s Item 4',
            'item_description'  => 'Scott\'s Fourth Item',
            'item_price' => 405000,
            'item_rating' => 4.75,
        ]);

        Item::create([
            'sub_category_id'   => 8,
            'item_seller'       => 'sangPemeliharaKuda',
            'item_name'         => 'Buku Tata Cara Merawat Kuda Putih',
            'item_description'  => 'Perawatan Kuda Yang Baik',
            'item_price' => 100,
            'item_rating' => 4.75,
        ]);

        Item::create([
            'sub_category_id'   => 8,
            'item_seller'       => 'sangPemeliharaKuda',
            'item_name'         => 'Buku Tata Cara Merawat Kuda Coklat',
            'item_description'  => 'Perawatan Kuda Yang Baik',
            'item_price' => 200,
            'item_rating' => 4.75,
        ]);

        Item::create([
            'sub_category_id'   => 8,
            'item_seller'       => 'sangPemeliharaKuda',
            'item_name'         => 'Buku Tata Cara Merawat Kuda Hitam',
            'item_description'  => 'Perawatan Kuda Yang Baik',
            'item_price' => 300,
            'item_rating' => 4.75,
        ]);

        Item::create([
            'sub_category_id'   => 8,
            'item_seller'       => 'sangPemeliharaKuda',
            'item_name'         => 'Buku Tata Cara Merawat Kuda Terbang',
            'item_description'  => 'Perawatan Kuda Yang Baik',
            'item_price' => 400,
            'item_rating' => 4.75,
        ]);

        Item::create([
            'sub_category_id'   => 8,
            'item_seller'       => 'sangPemeliharaKuda',
            'item_image'        => 'fp.png',
            'item_name'         => 'Buku Tata Cara Merawat Kuda Lam Tekanan FP',
            'item_description'  => 'Tata Cara Pemeliharaan Semangat Dalam Tekanan FP',
            'item_price' => 9999999,
            'item_rating' => 4.99,
        ]);
    }
}

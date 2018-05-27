<?php

use Illuminate\Database\Seeder;

class Item_Sub_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_sub_category')->insert([
            ['item_id' => 1,'sub_category_id' => 1],
            ['item_id' => 1,'sub_category_id' => 2],
            ['item_id' => 1,'sub_category_id' => 3],
            ['item_id' => 2,'sub_category_id' => 7],      
            ['item_id' => 3,'sub_category_id' => 2],
            ['item_id' => 3,'sub_category_id' => 8],
            ['item_id' => 4,'sub_category_id' => 2],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Xmarket\ItemImage;

class ItemImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemImage::create([
            'item_id' => 1,
            'image_path' => 'fp.png',
        ]);
    }
}

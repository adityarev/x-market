<?php

use Illuminate\Database\Seeder;
use Xmarket\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'seller' => 'sangPemeliharaKuda',
            'buyer' => 'sangPembeliKuda',
            'item_id' => '6',
            'status' => 0,            
        ]);

        Transaction::create([
            'seller' => 'sangPemeliharaKuda',
            'buyer' => 'sangPembeliKuda',
            'item_id' => '7',
            'status' => 1,            
        ]);

        Transaction::create([
            'seller' => 'sangPemeliharaKuda',
            'buyer' => 'sangPembeliKuda',
            'item_id' => '8',
            'status' => 2,            
        ]);

        Transaction::create([
            'seller' => 'scott',
            'buyer' => 'sangPembeliKuda',
            'item_id' => '3',
            'status' => 0,            
        ]);

        Transaction::create([
            'seller' => 'sangPemeliharaKuda',
            'buyer' => 'sangPembeliKuda',
            'item_id' => '9',
            'status' => 3,            
        ]);
    }
}

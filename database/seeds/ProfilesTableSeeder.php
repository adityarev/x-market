<?php

use Illuminate\Database\Seeder;
use Xmarket\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'user_name' => 'admin',
            'user_fullname' => 'Xmarket-Admin',
            'user_city' => 'Xmarket City',
            'user_address' => 'Xmarket',
            'user_description' => 'Super Admin',
        ]);

        Profile::create([
            'user_name' => 'scott',
            'user_fullname' => 'Aldera Scott',
            'user_city' => 'Xmarket City',
            'user_address' => 'Xmarket',
            'user_description' => 'Bussiness Man',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Xmarket\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'user_name' =>'admin',
            'user_password' => bcrypt('hunter2'),
            'user_email' => 'a@a.com',
            'user_type' => 1,
        ]);
        User::create([
            'user_name' => 'scott',
            'user_password' => bcrypt('tiger'),
            'user_email' => 'b@b.com',
            'user_type' => 0,
        ]);
    }
}

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
            'username' =>'admin',
            'password' => bcrypt('hunter2'),
            'email' => 'a@a.com',
            'user_type' => 1,
        ]);
        User::create([
            'username' => 'scott',
            'password' => bcrypt('tiger'),
            'email' => 'b@b.com',
            'user_type' => 0,
        ]);
    }
}

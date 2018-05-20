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
            'name' =>'admin',
            'password' => bcrypt('hunter2'),
            'email' => 'a@a.com',
            'type' => 1,
        ]);
        User::create([
            'name' => 'scott',
            'password' => bcrypt('tiger'),
            'email' => 'b@b.com',
            'type' => 0,
        ]);
    }
}

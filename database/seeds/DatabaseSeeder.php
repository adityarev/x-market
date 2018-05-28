<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('ProfilesTableSeeder');
        $this->call('ItemsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('SubCategoriesTableSeeder');
        $this->call('Item_Sub_CategoryTableSeeder');
        $this->call('NotificationsTableSeeder');
    }
}

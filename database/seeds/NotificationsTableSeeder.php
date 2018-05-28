<?php

use Illuminate\Database\Seeder;
use Xmarket\Notification;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notification::create([
            'id' => 1,
            'notification_receiver' => 'scott',
            'notification_title' => 'Test Notification 1',
            'notification_content' => 'Notification Being Tested 1',
            'notification_status' => false,            
        ]);

        Notification::create([
            'id' => 2,
            'notification_receiver' => 'scott',
            'notification_title' => 'Test Notification 2',
            'notification_content' => 'Notification Being Tested 2',
            'notification_status' => true,            
        ]);

        Notification::create([
            'id' => 3,
            'notification_receiver' => 'scott',
            'notification_title' => 'Test Notification 3',
            'notification_content' => 'Notification Being Tested 3',
            'notification_status' => false,            
        ]);
    }
}

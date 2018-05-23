<?php

use Illuminate\Database\Seeder;
use Xmarket\ServiceProvider;

class ServiceProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ServiceProvider::create([
            'servicer_provider_name' => 'JNE',
            'servicer_provider_type' => 'Pengiriman',
            'servicer_provider_description' => 'Butuh jasa pengiriman barang? Hubungi kami',
        ]);

        ServiceProvider::create([
            'servicer_provider_name' => 'Birds',
            'servicer_provider_type' => 'Asuransi',
            'servicer_provider_description' => 'Butuh jasa asuransi barang? Hubungi kami',
        ]);
    }
}

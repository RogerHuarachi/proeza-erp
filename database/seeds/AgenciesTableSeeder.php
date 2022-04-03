<?php

use Illuminate\Database\Seeder;
use App\Models\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name'       => 'AGENCIA NACIONAL',
            'city_id'      => '4'
        ]);
        Agency::create([
            'name'       => 'AGENCIA CALA CALA',
            'city_id'      => '4'
        ]);
        Agency::create([
            'name'       => 'AGENCIA EL PASO',
            'city_id'      => '4'
        ]);
        Agency::create([
            'name'       => 'AGENCIA PUNATA',
            'city_id'      => '4'
        ]);
        Agency::create([
            'name'       => 'AGENCIA CASCO VIEJO',
            'city_id'      => '9'
        ]);
        Agency::create([
            'name'       => 'AGENCIA RIO SECO',
            'city_id'      => '1'
        ]);
    }
}

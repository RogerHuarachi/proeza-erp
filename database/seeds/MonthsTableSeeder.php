<?php

use Illuminate\Database\Seeder;
use App\Models\Month;

class MonthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Month::create([
            'name'       => 'enero',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'febrero',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'marzo',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'abril',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'mayo',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'junio',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'julio',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'agosto',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'septiembre',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'octubre',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'noviembre',
            'year_id'       => '1',
        ]);
        Month::create([
            'name'       => 'diciembre',
            'year_id'       => '1',
        ]);
    }
}

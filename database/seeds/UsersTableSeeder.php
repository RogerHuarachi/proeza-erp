<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'       => 'admin',
            'email'      => 'adm@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'agency_id'      => 1,
        ]);
        $admin->assignRole('admin');

        $gg = User::create([
            'name'       => 'LUIS ALEJANDRO ARZE RICO',
            'email'      => 'proeza.ale@gmail.com',
            'password'      => bcrypt('proezaalejandroarze2021'),
            'agency_id'      => 1,
        ]);
        $gg->assignRole('gerencia general');

        $rrhh = User::create([
            'name'       => 'MARTHA PAOLA AMADOR',
            'email'      => 'proeza.marthapaola@gmail.com',
            'password'      => bcrypt('proezamarthapaola2021'),
            'agency_id'      => 1,
        ]);
        $rrhh->assignRole('rrhh');

        $conta = User::create([
            'name'       => 'LIMBERT RODRÍGUEZ ORELLANA',
            'email'      => 'proeza.limbert@gmail.com',
            'password'      => bcrypt('proezalimbert2021'),
            'agency_id'      => 1,
        ]);
        $conta->assignRole('contabilidad');

        $op = User::create([
            'name'       => 'JHOANA BRENDA JIMENEZ FLORES',
            'email'      => 'proeza.brenda@gmail.com',
            'password'      => bcrypt('proezabrenda2021'),
            'agency_id'      => 1,
        ]);
        $op->assignRole('operaciones');

        $jas = [
            [
                'name'       => 'ELIZABETH CALLE COAQUIRA',
                'email'      => 'proeza.elycalle@gmail.com',
                'password'      => bcrypt('proezaelycalle2021'),
                'agency_id'      => 2,
            ],
            [
                'name'       => 'ALEX GUERRA GUZMAN',
                'email'      => 'proeza.alex@gmail.com',
                'password'      => bcrypt('proezaalex2021'),
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROXANA LLANOS MAMANI',
                'email'      => 'proeza.roxana@gmail.com',
                'password'      => bcrypt('proezaroxana2021'),
                'agency_id'      => 4,
            ],
            [
                'name'       => 'DOUGLAS COPA RODRIGUEZ',
                'email'      => 'proeza.douglas@gmail.com',
                'password'      => bcrypt('proezadouglas2021'),
                'agency_id'      => 5,
            ],
            [
                'name'       => 'VERONICA ANEIVA SALAZAR',
                'email'      => 'proeza.veronica@gmail.com',
                'password'      => bcrypt('proezaveronica2021'),
                'agency_id'      => 6,
            ]
        ];
        foreach ($jas as $ja) {
            $userG = User::create([
                'name'       => $ja['name'],
                'email'       => $ja['email'],
                'password'       => $ja['password'],
                'agency_id'       => $ja['agency_id'],
            ]);
            $userG->assignRole('ea');
        }
    }
}

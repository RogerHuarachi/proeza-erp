<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin', 'slug' => 'administrador']);
        $admin->givePermissionTo([
        	'permissions.index',
        	'permissions.create',
        	'permissions.edit',
            'permissions.destroy',
        	'permissions.show',

        	'roles.index',
        	'roles.create',
        	'roles.edit',
            'roles.destroy',
        	'roles.show',

        	'users.index',
        	'users.create',
        	'users.edit',
        	'users.destroy',
        	'users.show',
        	'users.updateProfile',

        	'cities.index',
        	'cities.create',
        	'cities.edit',
        	'cities.destroy',
        	'cities.show',

        	'agencies.index',
        	'agencies.create',
        	'agencies.edit',
        	'agencies.destroy',
        	'agencies.show',

        	'years.index',
        	'years.create',
        	'years.edit',
        	'years.destroy',
        	'years.show',

        	'months.index',
        	'months.create',
        	'months.edit',
        	'months.destroy',
        	'months.show',

        	'categories.index',
        	'categories.create',
        	'categories.edit',
        	'categories.destroy',
        	'categories.show',

        	'items.index',
        	'items.create',
        	'items.edit',
        	'items.destroy',
        	'items.show',

        	'spendings.index',
        	'spendings.create',
        	'spendings.edit',
        	'spendings.destroy',
        	'spendings.show',

        	'administratives.index',
        	'administratives.create',
        	'administratives.edit',
        	'administratives.destroy',
        	'administratives.show',

        	'interests.index',
        	'interests.create',
        	'interests.edit',
        	'interests.destroy',
        	'interests.show',

        	'investors.index',
        	'investors.create',
        	'investors.edit',
        	'investors.destroy',
        	'investors.show',

        	'changes.index',
        	'changes.create',
        	'changes.edit',
        	'changes.destroy',
        	'changes.show',

        	'indicators.index',
        	'indicators.create',
        	'indicators.edit',
        	'indicators.destroy',
        	'indicators.show',

            // report spending
        	'reportSpending.index',
            // report spending administrative
        	'reportAdministrative.index',
            // report interest
        	'reportInterest.index',
            // report income
        	'reportIncome.index',
            // report balance
        	'reportBalance.index',



            // Dashboard
        	'dashboard.index',
		]);
        $gg = Role::create(['name' => 'gerencia general', 'slug' => 'GERENCIA GENERAL']);
        $gg->givePermissionTo([
        	'users.updateProfile',
        	'eadmins.index',
        	'eadmins.create',
        	'eadmins.edit',
            'eadmins.destroy',
        	'eadmins.show',
            // report spending
        	'reportSpending.index',
            // report spending administrative
        	'reportAdministrative.index',
            // report interest
        	'reportInterest.index',
            // report income
        	'reportIncome.index',
            // report balance
        	'reportBalance.index',

            // Dashboard
        	'dashboard.index',
		]);

        $rrhh = Role::create(['name' => 'rrhh', 'slug' => 'SUB GERENCIA NACIONAL DE RECURSOS HUMANOS']);
        $rrhh->givePermissionTo([
        	'users.updateProfile',
        	'eadmins.index',
        	'eadmins.create',
        	'eadmins.edit',
            'eadmins.destroy',
        	'eadmins.show',
		]);

        $cont = Role::create(['name' => 'contabilidad', 'slug' => 'SUB GERENCIA NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA']);
        $cont->givePermissionTo([
        	'users.updateProfile',
        	'eadmins.index',
        	'eadmins.create',
        	'eadmins.edit',
            'eadmins.destroy',
        	'eadmins.show',

        	'iadmins.index',
        	'iadmins.create',
        	'iadmins.edit',
            'iadmins.destroy',
        	'iadmins.show',
		]);

        Role::create(['name' => 'comercial', 'slug' => 'SUB GERENCIA NACIONAL COMERCIAL']);

        Role::create(['name' => 'legal', 'slug' => 'SUB GERENCIA NACIONAL DE ASESORIA LEGAL']);

        $ope = Role::create(['name' => 'operaciones', 'slug' => 'SUB GERENCIA NACIONAL DE OPERACIONES']);
        $ope->givePermissionTo([
        	'users.updateProfile',
        	'eadmins.index',
        	'eadmins.create',
        	'eadmins.edit',
            'eadmins.destroy',
        	'eadmins.show',
		]);

        Role::create(['name' => 'tics', 'slug' => 'JEFATURA NACIONAL DE TECNOLOGIA DE LA INFORMACION Y COMUNICACION']);

        $ea = Role::create(['name' => 'ea', 'slug' => 'ENCARGADO DE AGENCIA']);
        $ea->givePermissionTo([
        	'users.updateProfile',
        	'aadmins.index',
        	'aadmins.create',
        	'aadmins.edit',
            'aadmins.destroy',
        	'aadmins.show',
		]);
    }
}

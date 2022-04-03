<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'permissions.index',      'slug' => 'listar permisos']);
        Permission::create(['name' => 'permissions.create',     'slug' => 'crear permisos']);
        Permission::create(['name' => 'permissions.edit',       'slug' => 'editar permisos']);
        Permission::create(['name' => 'permissions.destroy',    'slug' => 'eliminar permisos']);
        Permission::create(['name' => 'permissions.show',       'slug' => 'ver permisos']);
        //Role list
        Permission::create(['name' => 'roles.index',    'slug' => 'listar roles']);
        Permission::create(['name' => 'roles.create',   'slug' => 'crear roles']);
        Permission::create(['name' => 'roles.edit',     'slug' => 'editar roles']);
        Permission::create(['name' => 'roles.destroy',  'slug' => 'eliminar roles']);
        Permission::create(['name' => 'roles.show',     'slug' => 'ver roles']);
        //User list
        Permission::create(['name' => 'users.index',    'slug' => 'listar usuarios']);
        Permission::create(['name' => 'users.create',   'slug' => 'crear usuarios']);
        Permission::create(['name' => 'users.edit',     'slug' => 'editar usuarios']);
        Permission::create(['name' => 'users.destroy',  'slug' => 'eliminar usuarios']);
        Permission::create(['name' => 'users.show',     'slug' => 'ver usuarios']);
        Permission::create(['name' => 'users.updateProfile', 'slug' => 'Editar Perfil']);
        //City list
        Permission::create(['name' => 'cities.index',    'slug' => 'listar ciudad']);
        Permission::create(['name' => 'cities.create',   'slug' => 'crear ciudad']);
        Permission::create(['name' => 'cities.edit',     'slug' => 'editar ciudad']);
        Permission::create(['name' => 'cities.destroy',  'slug' => 'eliminar ciudad']);
        Permission::create(['name' => 'cities.show',     'slug' => 'ver ciudad']);
        //Agency list
        Permission::create(['name' => 'agencies.index',    'slug' => 'listar agencia']);
        Permission::create(['name' => 'agencies.create',   'slug' => 'crear agencia']);
        Permission::create(['name' => 'agencies.edit',     'slug' => 'editar agencia']);
        Permission::create(['name' => 'agencies.destroy',  'slug' => 'eliminar agencia']);
        Permission::create(['name' => 'agencies.show',     'slug' => 'ver agencia']);
        //Year list
        Permission::create(['name' => 'years.index',    'slug' => 'listar gestion']);
        Permission::create(['name' => 'years.create',   'slug' => 'crear gestion']);
        Permission::create(['name' => 'years.edit',     'slug' => 'editar gestion']);
        Permission::create(['name' => 'years.destroy',  'slug' => 'eliminar gestion']);
        Permission::create(['name' => 'years.show',     'slug' => 'ver gestion']);
        //Month list
        Permission::create(['name' => 'months.index',    'slug' => 'listar mes']);
        Permission::create(['name' => 'months.create',   'slug' => 'crear mes']);
        Permission::create(['name' => 'months.edit',     'slug' => 'editar mes']);
        Permission::create(['name' => 'months.destroy',  'slug' => 'eliminar mes']);
        Permission::create(['name' => 'months.show',     'slug' => 'ver mes']);
        //Category list
        Permission::create(['name' => 'categories.index',    'slug' => 'listar categoria']);
        Permission::create(['name' => 'categories.create',   'slug' => 'crear categoria']);
        Permission::create(['name' => 'categories.edit',     'slug' => 'editar categoria']);
        Permission::create(['name' => 'categories.destroy',  'slug' => 'eliminar categoria']);
        Permission::create(['name' => 'categories.show',     'slug' => 'ver categoria']);
        //item list
        Permission::create(['name' => 'items.index',    'slug' => 'listar Artículo']);
        Permission::create(['name' => 'items.create',   'slug' => 'crear Artículo']);
        Permission::create(['name' => 'items.edit',     'slug' => 'editar Artículo']);
        Permission::create(['name' => 'items.destroy',  'slug' => 'eliminar Artículo']);
        Permission::create(['name' => 'items.show',     'slug' => 'ver Artículo']);
        //spending list
        Permission::create(['name' => 'spendings.index',    'slug' => 'listar Gastos']);
        Permission::create(['name' => 'spendings.create',   'slug' => 'crear Gastos']);
        Permission::create(['name' => 'spendings.edit',     'slug' => 'editar Gastos']);
        Permission::create(['name' => 'spendings.destroy',  'slug' => 'eliminar Gastos']);
        Permission::create(['name' => 'spendings.show',     'slug' => 'ver Gastos']);
        //administrative list
        Permission::create(['name' => 'administratives.index',    'slug' => 'listar Gastos Administrativos']);
        Permission::create(['name' => 'administratives.create',   'slug' => 'crear Gastos Administrativos']);
        Permission::create(['name' => 'administratives.edit',     'slug' => 'editar Gastos Administrativos']);
        Permission::create(['name' => 'administratives.destroy',  'slug' => 'eliminar Gastos Administrativos']);
        Permission::create(['name' => 'administratives.show',     'slug' => 'ver Gastos Administrativos']);
        //interest list
        Permission::create(['name' => 'interests.index',    'slug' => 'listar Intereses']);
        Permission::create(['name' => 'interests.create',   'slug' => 'crear Intereses']);
        Permission::create(['name' => 'interests.edit',     'slug' => 'editar Intereses']);
        Permission::create(['name' => 'interests.destroy',  'slug' => 'eliminar Intereses']);
        Permission::create(['name' => 'interests.show',     'slug' => 'ver Intereses']);
        //investor list
        Permission::create(['name' => 'investors.index',    'slug' => 'listar inversionistas']);
        Permission::create(['name' => 'investors.create',   'slug' => 'crear inversionistas']);
        Permission::create(['name' => 'investors.edit',     'slug' => 'editar inversionistas']);
        Permission::create(['name' => 'investors.destroy',  'slug' => 'eliminar inversionistas']);
        Permission::create(['name' => 'investors.show',     'slug' => 'ver inversionistas']);
        //change list
        Permission::create(['name' => 'changes.index',    'slug' => 'listar Cambios']);
        Permission::create(['name' => 'changes.create',   'slug' => 'crear Cambios']);
        Permission::create(['name' => 'changes.edit',     'slug' => 'editar Cambios']);
        Permission::create(['name' => 'changes.destroy',  'slug' => 'eliminar Cambios']);
        Permission::create(['name' => 'changes.show',     'slug' => 'ver Cambios']);
        //indicator list
        Permission::create(['name' => 'indicators.index',    'slug' => 'listar Indicadores']);
        Permission::create(['name' => 'indicators.create',   'slug' => 'crear Indicadores']);
        Permission::create(['name' => 'indicators.edit',     'slug' => 'editar Indicadores']);
        Permission::create(['name' => 'indicators.destroy',  'slug' => 'eliminar Indicadores']);
        Permission::create(['name' => 'indicators.show',     'slug' => 'ver Indicadores']);


        //administrative Gerency list
        Permission::create(['name' => 'eadmins.index',    'slug' => 'listar Gastos Gerencia']);
        Permission::create(['name' => 'eadmins.create',   'slug' => 'crear Gastos Gerencia']);
        Permission::create(['name' => 'eadmins.edit',     'slug' => 'editar Gastos Gerencia']);
        Permission::create(['name' => 'eadmins.destroy',  'slug' => 'eliminar Gastos Gerencia']);
        Permission::create(['name' => 'eadmins.show',     'slug' => 'ver Gastos Gerencia']);
        //administrative Gerency list
        Permission::create(['name' => 'aadmins.index',    'slug' => 'listar Gastos Administrativos Gerencia']);
        Permission::create(['name' => 'aadmins.create',   'slug' => 'crear Gastos Administrativos Gerencia']);
        Permission::create(['name' => 'aadmins.edit',     'slug' => 'editar Gastos Administrativos Gerencia']);
        Permission::create(['name' => 'aadmins.destroy',  'slug' => 'eliminar Gastos Administrativos Gerencia']);
        Permission::create(['name' => 'aadmins.show',     'slug' => 'ver Gastos Administrativos Gerencia']);
        //interest Gerency list
        Permission::create(['name' => 'iadmins.index',    'slug' => 'listar Intereses Gerencia']);
        Permission::create(['name' => 'iadmins.create',   'slug' => 'crear Intereses Gerencia']);
        Permission::create(['name' => 'iadmins.edit',     'slug' => 'editar Intereses Gerencia']);
        Permission::create(['name' => 'iadmins.destroy',  'slug' => 'eliminar Intereses Gerencia']);
        Permission::create(['name' => 'iadmins.show',     'slug' => 'ver Intereses Gerencia']);
        //indicators Gerency list
        Permission::create(['name' => 'inadmins.index',    'slug' => 'listar Indicadores Gerencia']);
        Permission::create(['name' => 'inadmins.create',   'slug' => 'crear Indicadores Gerencia']);
        Permission::create(['name' => 'inadmins.edit',     'slug' => 'editar Indicadores Gerencia']);
        Permission::create(['name' => 'inadmins.destroy',  'slug' => 'eliminar Indicadores Gerencia']);
        Permission::create(['name' => 'inadmins.show',     'slug' => 'ver Indicadores Gerencia']);



        //Report Spending
        Permission::create(['name' => 'reportSpending.index',    'slug' => 'Reporte de Gastos']);
        //Report Spending Adm
        Permission::create(['name' => 'reportAdministrative.index',    'slug' => 'Reporte de Gastos Adm']);
        //Report Interest
        Permission::create(['name' => 'reportInterest.index',    'slug' => 'Reporte de Intereses']);
        //Report Income
        Permission::create(['name' => 'reportIncome.index',    'slug' => 'Reporte de Ingresos']);
        //Report Balance
        Permission::create(['name' => 'reportBalance.index',    'slug' => 'Reporte de Balance']);



        //Dashboard
        Permission::create(['name' => 'dashboard.index',    'slug' => 'Dashboard']);
    }
}

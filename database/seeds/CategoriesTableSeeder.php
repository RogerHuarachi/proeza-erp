<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GG
        Category::create(['name' => 'pago inversionistas', 'role_id' => 2]);

        // RRHH
        Category::create(['name' => 'alquileres', 'role_id' => 3]);
        Category::create(['name' => 'material de escritorio', 'role_id' => 3]);
        Category::create(['name' => 'material de servicio', 'role_id' => 3]);
        Category::create(['name' => 'refrigerio', 'role_id' => 3]);
        Category::create(['name' => 'uniformes y regalos cumpleaños', 'role_id' => 3]);
        Category::create(['name' => 'institucional', 'role_id' => 3]);

        // Contabilidad
        Category::create(['name' => 'impuestos', 'role_id' => 4]);
        Category::create(['name' => 'tramites', 'role_id' => 4]);
        Category::create(['name' => 'ministerio de trabajo', 'role_id' => 4]);
        Category::create(['name' => 'licencias de funcionamiento', 'role_id' => 4]);
        Category::create(['name' => 'afiliaciones', 'role_id' => 4]);
        Category::create(['name' => 'previciones', 'role_id' => 4]);
        Category::create(['name' => 'aportes seguro social', 'role_id' => 4]);

        // operaciones
        Category::create(['name' => 'agua', 'role_id' => 7]);
        Category::create(['name' => 'luz', 'role_id' => 7]);
        Category::create(['name' => 'telefonia e internet', 'role_id' => 7]);
        Category::create(['name' => 'expensas', 'role_id' => 7]);
        Category::create(['name' => 'caja chica', 'role_id' => 7]);
        Category::create(['name' => 'icam', 'role_id' => 7]);
        Category::create(['name' => 'seguros', 'role_id' => 7]);
        Category::create(['name' => 'seguridad', 'role_id' => 7]);
        Category::create(['name' => 'pasajes inter provinciales', 'role_id' => 7]);
        Category::create(['name' => 'pasajes cobranzas', 'role_id' => 7]);
        Category::create(['name' => 'bancos', 'role_id' => 7]);
        Category::create(['name' => 'gastos judiciales', 'role_id' => 7]);
    }
}

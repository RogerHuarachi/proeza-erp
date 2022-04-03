<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // GG
        Item::create(['name' => 'PAMELA ARZE CARDONA', 'category_id' => 1]);
        Item::create(['name' => 'SILVIA RICO NUMBELA', 'category_id' => 1]);
        Item::create(['name' => 'EDUARDO IRIARTE CESPEDES', 'category_id' => 1]);
        Item::create(['name' => 'SERGIO GUEVARA GUITIAN', 'category_id' => 1]);
        Item::create(['name' => 'ELIZABETH RICO NUMBELA', 'category_id' => 1]);
        Item::create(['name' => 'DELIA ARZE RICO', 'category_id' => 1]);
        Item::create(['name' => 'NILA RICO NUMBELA', 'category_id' => 1]);
        Item::create(['name' => 'ALEJANDRO ARZE RICO', 'category_id' => 1]);
        Item::create(['name' => 'ALEJANDRO ARZE RICO', 'category_id' => 1]);
        Item::create(['name' => 'ALEJANDRO ARZE RICO', 'category_id' => 1]);
        Item::create(['name' => 'JOSE ANTONIO ARZE MALDONADO', 'category_id' => 1]);
        Item::create(['name' => 'JOSE ANTONIO ARZE MALDONADO', 'category_id' => 1]);
        Item::create(['name' => 'JOSE ANTONIO ARZE MALDONADO', 'category_id' => 1]);
        Item::create(['name' => 'JHANET ARZE ARTUNDUAGA', 'category_id' => 1]);
        Item::create(['name' => 'GRISELDA ARCE ARTUNDUAGA', 'category_id' => 1]);
        Item::create(['name' => 'PAOLA SAGARNAGA SERRUDO', 'category_id' => 1]);
        Item::create(['name' => 'MARCELA PEREDO CESPEDES', 'category_id' => 1]);
        Item::create(['name' => 'MARCELA PEREDO CESPEDES', 'category_id' => 1]);
        Item::create(['name' => 'ALEX GUERRA GUZMAN', 'category_id' => 1]);
        Item::create(['name' => 'DANIEL NUMBELA ', 'category_id' => 1]);
        Item::create(['name' => 'ZORAIDA PADILLA', 'category_id' => 1]);
        Item::create(['name' => 'ZORAIDA PADILLA 2', 'category_id' => 1]);
        Item::create(['name' => 'EDSSON COCA', 'category_id' => 1]);
        Item::create(['name' => 'DENISSE MELGAR', 'category_id' => 1]);
        Item::create(['name' => 'SUZANNE BENJAMIN', 'category_id' => 1]);
        Item::create(['name' => 'ELIZABETH CALLE', 'category_id' => 1]);
        Item::create(['name' => 'JUANY ORELLANA', 'category_id' => 1]);
        Item::create(['name' => 'GASOLINA', 'category_id' => 1]);
        Item::create(['name' => 'MANTENIMIENTO VEHICULO', 'category_id' => 1]);
        Item::create(['name' => 'IMPUESTOS', 'category_id' => 1]);
        Item::create(['name' => 'ALMUERZOS', 'category_id' => 1]);
        Item::create(['name' => 'GASTOS VARIOS', 'category_id' => 1]);
        Item::create(['name' => 'BANCO NACIONAL JEEEP', 'category_id' => 1]);
        Item::create(['name' => 'BANCO SOLIDARIO SILVIA', 'category_id' => 1]);

        // rrhh
        Item::create(['name' => 'oficina nacional', 'category_id' => 2]);
        Item::create(['name' => 'agencia cala cala', 'category_id' => 2]);
        Item::create(['name' => 'agencia el paso', 'category_id' => 2]);
        Item::create(['name' => 'agencia punata', 'category_id' => 2]);
        Item::create(['name' => 'agencia rio seco', 'category_id' => 2]);
        Item::create(['name' => 'agencia casco viejo', 'category_id' => 2]);

        Item::create(['name' => 'folders', 'category_id' => 3]);
        Item::create(['name' => 'nepacos', 'category_id' => 3]);
        Item::create(['name' => 'recibos electronicos', 'category_id' => 3]);
        Item::create(['name' => 'tarjetas', 'category_id' => 3]);
        Item::create(['name' => 'recivos manuales', 'category_id' => 3]);
        Item::create(['name' => 'resaltadores', 'category_id' => 3]);
        Item::create(['name' => 'marcadores', 'category_id' => 3]);
        Item::create(['name' => 'boligrafos', 'category_id' => 3]);
        Item::create(['name' => 'hojas bond carta', 'category_id' => 3]);
        Item::create(['name' => 'hojas bond oficio', 'category_id' => 3]);
        Item::create(['name' => 'sobre manila', 'category_id' => 3]);
        Item::create(['name' => 'tinta de impresora', 'category_id' => 3]);
        Item::create(['name' => 'lapices', 'category_id' => 3]);
        Item::create(['name' => 'cuadernos', 'category_id' => 3]);
        Item::create(['name' => 'carpetas tapa dura', 'category_id' => 3]);
        Item::create(['name' => 'grapas', 'category_id' => 3]);
        Item::create(['name' => 'talonario seguro', 'category_id' => 3]);
        Item::create(['name' => 'clips', 'category_id' => 3]);
        Item::create(['name' => 'masquin y scoch', 'category_id' => 3]);
        Item::create(['name' => 'carpicola', 'category_id' => 3]);
        Item::create(['name' => 'tijera', 'category_id' => 3]);
        Item::create(['name' => 'post its', 'category_id' => 3]);
        Item::create(['name' => 'ligas', 'category_id' => 3]);
        Item::create(['name' => 'corrector', 'category_id' => 3]);
        Item::create(['name' => 'spray de pintura', 'category_id' => 3]);

        Item::create(['name' => 'papel higienico', 'category_id' => 4]);
        Item::create(['name' => 'jabon liquido para manos', 'category_id' => 4]);
        Item::create(['name' => 'detergente de vagilla', 'category_id' => 4]);
        Item::create(['name' => 'limpia piso', 'category_id' => 4]);
        Item::create(['name' => 'amonio cuaternario', 'category_id' => 4]);
        Item::create(['name' => 'trapo para piso', 'category_id' => 4]);
        Item::create(['name' => 'lustra muebres', 'category_id' => 4]);
        Item::create(['name' => 'ambientador', 'category_id' => 4]);
        Item::create(['name' => 'papel toalla', 'category_id' => 4]);
        Item::create(['name' => 'alcohol', 'category_id' => 4]);
        Item::create(['name' => 'bolsas de basura', 'category_id' => 4]);
        Item::create(['name' => 'alcohol en gel', 'category_id' => 4]);
        Item::create(['name' => 'limpia vidrios', 'category_id' => 4]);
        Item::create(['name' => 'detergente en polvo', 'category_id' => 4]);
        Item::create(['name' => 'lavandina', 'category_id' => 4]);
        Item::create(['name' => 'barbijos', 'category_id' => 4]);
        Item::create(['name' => 'escoba', 'category_id' => 4]);
        Item::create(['name' => 'goma de trapear', 'category_id' => 4]);
        Item::create(['name' => 'franelas', 'category_id' => 4]);
        Item::create(['name' => 'basureros', 'category_id' => 4]);
        Item::create(['name' => 'servilleras', 'category_id' => 4]);
        Item::create(['name' => 'cera para piso', 'category_id' => 4]);

        Item::create(['name' => 'cafe', 'category_id' => 5]);
        Item::create(['name' => 'te', 'category_id' => 5]);
        Item::create(['name' => 'mates', 'category_id' => 5]);
        Item::create(['name' => 'azucar', 'category_id' => 5]);
        Item::create(['name' => 'avena', 'category_id' => 5]);
        Item::create(['name' => 'dulces', 'category_id' => 5]);
        Item::create(['name' => 'mantequilla', 'category_id' => 5]);
        Item::create(['name' => 'mermelada', 'category_id' => 5]);
        Item::create(['name' => 'galletas', 'category_id' => 5]);
        Item::create(['name' => 'vasos desechables', 'category_id' => 5]);
        Item::create(['name' => 'botellon de agua', 'category_id' => 5]);
        Item::create(['name' => 'desayunos', 'category_id' => 5]);
        Item::create(['name' => 'almuerzos', 'category_id' => 5]);

        Item::create(['name' => 'poleras', 'category_id' => 6]);
        Item::create(['name' => 'tasas', 'category_id' => 6]);
        Item::create(['name' => 'botellones', 'category_id' => 6]);
        Item::create(['name' => 'gorras', 'category_id' => 6]);

        Item::create(['name' => 'viaticos', 'category_id' => 7]);
        Item::create(['name' => 'pasajes', 'category_id' => 7]);
        Item::create(['name' => 'gastos de representacion', 'category_id' => 7]);
        Item::create(['name' => 'ospedaje', 'category_id' => 7]);
        Item::create(['name' => 'salarios', 'category_id' => 7]);
        Item::create(['name' => 'pasantias', 'category_id' => 7]);
        Item::create(['name' => 'caja cordes', 'category_id' => 7]);
        Item::create(['name' => 'mantenimiento de equipos', 'category_id' => 7]);
        Item::create(['name' => 'cursos de capacitacion', 'category_id' => 7]);
        Item::create(['name' => 'indemnizacion', 'category_id' => 7]);
        Item::create(['name' => 'cena fin de año', 'category_id' => 7]);
        Item::create(['name' => 'canastones', 'category_id' => 7]);

        // contabilidad
        Item::create(['name' => 'impuestos nacionales plan de pagos', 'category_id' => 8]);
        Item::create(['name' => 'impuestos iue', 'category_id' => 8]);
        Item::create(['name' => 'impuestos iva', 'category_id' => 8]);
        Item::create(['name' => 'impuestos it', 'category_id' => 8]);
        Item::create(['name' => 'retenciones', 'category_id' => 8]);

        Item::create(['name' => 'licencia de funcionamiento', 'category_id' => 9]);
        Item::create(['name' => 'fundaempresas', 'category_id' => 9]);

        Item::create(['name' => 'planilla mensual', 'category_id' => 10]);
        Item::create(['name' => 'planilla retroactivo', 'category_id' => 10]);
        Item::create(['name' => 'planilla aguinaldo', 'category_id' => 10]);
        Item::create(['name' => 'visacion contratos de trabajo', 'category_id' => 10]);

        Item::create(['name' => 'agencia cala cala', 'category_id' => 11]);
        Item::create(['name' => 'agencia el paso', 'category_id' => 11]);
        Item::create(['name' => 'agencia punata', 'category_id' => 11]);
        Item::create(['name' => 'agencia casco viejo', 'category_id' => 11]);
        Item::create(['name' => 'agencia rio seco', 'category_id' => 11]);

        Item::create(['name' => 'afp prevision', 'category_id' => 12]);
        Item::create(['name' => 'afp futuro', 'category_id' => 12]);

        Item::create(['name' => 'aguinaldo', 'category_id' => 13]);
        Item::create(['name' => 'indemnizacion', 'category_id' => 13]);

        Item::create(['name' => 'afps patronal 6.71%', 'category_id' => 14]);
        Item::create(['name' => 'afps laboral 12.71%', 'category_id' => 14]);

        // operaciones
        Item::create(['name' => 'agua potable', 'category_id' => 15]);

        Item::create(['name' => 'luz nacional', 'category_id' => 16]);
        Item::create(['name' => 'luz cala cala', 'category_id' => 16]);
        Item::create(['name' => 'luz el paso', 'category_id' => 16]);
        Item::create(['name' => 'luz punata', 'category_id' => 16]);
        Item::create(['name' => 'luz casco viejo', 'category_id' => 16]);
        Item::create(['name' => 'luz rio seco', 'category_id' => 16]);

        Item::create(['name' => 'telefono fijo', 'category_id' => 17]);
        Item::create(['name' => 'celulares', 'category_id' => 17]);
        Item::create(['name' => 'interet ip publico competco regional cochabamba', 'category_id' => 17]);
        Item::create(['name' => 'internet casco viejo ', 'category_id' => 17]);
        Item::create(['name' => 'internet el alto ', 'category_id' => 17]);

        Item::create(['name' => 'expensas nacional', 'category_id' => 18]);
        Item::create(['name' => 'expensas cala cala', 'category_id' => 18]);
        Item::create(['name' => 'expensas casco viejo', 'category_id' => 18]);

        Item::create(['name' => 'caja chica cala cala', 'category_id' => 19]);
        Item::create(['name' => 'caja chica el paso', 'category_id' => 19]);
        Item::create(['name' => 'caja chica punata', 'category_id' => 19]);
        Item::create(['name' => 'caja chica casco viejo', 'category_id' => 19]);
        Item::create(['name' => 'caja chica rio seco', 'category_id' => 19]);

        Item::create(['name' => 'icam', 'category_id' => 20]);

        Item::create(['name' => 'seguro contra accidentes', 'category_id' => 21]);
        Item::create(['name' => 'seguro de salud', 'category_id' => 21]);
        Item::create(['name' => 'seguro casastrofe', 'category_id' => 21]);
        Item::create(['name' => 'seguro 3d', 'category_id' => 21]);

        Item::create(['name' => 'seguridad', 'category_id' => 22]);

        Item::create(['name' => 'edsson', 'category_id' => 23]);
        Item::create(['name' => 'limbert', 'category_id' => 23]);
        Item::create(['name' => 'brenda', 'category_id' => 23]);
        Item::create(['name' => 'roger', 'category_id' => 23]);
        Item::create(['name' => 'teresa', 'category_id' => 23]);

        Item::create(['name' => 'cala cala', 'category_id' => 24]);
        Item::create(['name' => 'el paso', 'category_id' => 24]);
        Item::create(['name' => 'punata', 'category_id' => 24]);
        Item::create(['name' => 'casco viejo', 'category_id' => 24]);
        Item::create(['name' => 'rio seco', 'category_id' => 24]);

        Item::create(['name' => 'banco solidario', 'category_id' => 25]);
        Item::create(['name' => 'banco union', 'category_id' => 25]);

        Item::create(['name' => 'gastos judiciales', 'category_id' => 26]);

    }
}

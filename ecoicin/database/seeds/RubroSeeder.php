<?php

use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $rubros = [
        'Agricultura, ganaderia, caza y silvicultura',
        'Pesca',
        'Explotacion de minas y canteras',
        'Industrias manufactureras no metalicas',
        'Industrias manufactureras metalicas',
        'Suministro de electricidad, gas y agua',
        'Construccion',
        'Comercio al por mayor y menor, rep. veh.automotores/enseres domesticos',
        'Hoteles y restaurantes',
        'Transporte, almacenamiento y comunicaciones',
        'Intermediacion financiera',
        'Actividades inmobiliarias, empresariales y de alquiler',
        'Adm. publica y defensa, planes de seg. social afiliacion obligatoria',
        'Enseñanza',
        'Servicios sociales y de salud',
        'Otras actividades de servicios comunitarias, sociales y personales',
        'Consejo de administracion de edificios y condominios',
        'Organizaciones y organos extraterritoriales'
      ];

      foreach ($rubros as $rubro) {
        DB::table('rubro')->insert([
            'nombre_rubro' => $rubro
        ]);
      }
    }
}

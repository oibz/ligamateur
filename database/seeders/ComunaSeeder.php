<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['nombre' => 'Carahue', 'region_id' => '12'],
            ['nombre' => 'Cholchol', 'region_id' => '12'],
            ['nombre' => 'Cunco', 'region_id' => '12'],
            ['nombre' => 'Curarrehue', 'region_id' => '12'],
            ['nombre' => 'Freire', 'region_id' => '12'],
            ['nombre' => 'Galvarino', 'region_id' => '12'],
            ['nombre' => 'Gorbea', 'region_id' => '12'],
            ['nombre' => 'Lautaro', 'region_id' => '12'],
            ['nombre' => 'Loncoche', 'region_id' => '12'],
            ['nombre' => 'Melipeuco', 'region_id' => '12'],
            ['nombre' => 'Nueva Imperial', 'region_id' => '12'],
            ['nombre' => 'Padre Las Casas', 'region_id' => '12'],
            ['nombre' => 'Perquenco', 'region_id' => '12'],
            ['nombre' => 'Pitrufquén', 'region_id' => '12'],
            ['nombre' => 'Pucón', 'region_id' => '12'],
            ['nombre' => 'Puerto Saavedra', 'region_id' => '12'],
            ['nombre' => 'Temuco', 'region_id' => '12'],
            ['nombre' => 'Teodoro Schmidt', 'region_id' => '12'],
            ['nombre' => 'Toltén', 'region_id' => '12'],
            ['nombre' => 'Vilcún ', 'region_id' => '12'],
            ['nombre' => 'Villarrica', 'region_id' => '12'],
            ['nombre' => 'Angol', 'region_id' => '12'],
            ['nombre' => 'Collipulli', 'region_id' => '12'],
            ['nombre' => 'Curacautín', 'region_id' => '12'],
            ['nombre' => 'Ercilla', 'region_id' => '12'],
            ['nombre' => 'Lonquimay', 'region_id' => '12'],
            ['nombre' => 'Los Sauces', 'region_id' => '12'],
            ['nombre' => 'Lumaco', 'region_id' => '12'],
            ['nombre' => 'Purén', 'region_id' => '12'],
            ['nombre' => 'Renaico', 'region_id' => '12'],
            ['nombre' => 'Traiguén', 'region_id' => '12'],
            ['nombre' => 'Victoria', 'region_id' => '12']
        ];

        DB::table('comuna')->insert($datos);
    }
}

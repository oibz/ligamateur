<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['nombre' => 'Región de Arica y Parinacota'],
            ['nombre' => 'Región de Tarapacá'],
            ['nombre' => 'Región de Antofagasta'],
            ['nombre' => 'Región de Atacama'],
            ['nombre' => 'Región de Coquimbo'],
            ['nombre' => 'Región de Valparaíso'],
            ['nombre' => 'Región Metropolitana'],
            ['nombre' => 'Región del Libertador General Bernardo O´Higgins'],
            ['nombre' => 'Región del Maule'],
            ['nombre' => 'Región de Ñuble'],
            ['nombre' => 'Región del Biobío'],
            ['nombre' => 'Región de La Araucanía'],
            ['nombre' => 'Región de Los Ríos'],
            ['nombre' => 'Región de Los Lagos'],
            ['nombre' => 'Región de Aysén'],
            ['nombre' => 'Región de Magallanes y de la Antártica Chilena']
        ];

        DB::table('region')->insert($datos);
    }
}

<?php

use Illuminate\Database\Seeder;

class tarjeta_video extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '8',
            'ancho_datos' => '256',
            'frecuencia' => '1284',
            'tipo_interfaz' => 'PCI Express x16 3.0',
            'producto_id' => '31',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '6',
            'ancho_datos' => '192',
            'frecuencia' => '1560',
            'tipo_interfaz' => 'PCI Express 4.0',
            'producto_id' => '32',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '2',
            'ancho_datos' => '64',
            'frecuencia' => '954',
            'tipo_interfaz' => 'PCI Express x8 2.0',
            'producto_id' => '33',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '4',
            'ancho_datos' => '128',
            'frecuencia' => '1590',
            'tipo_interfaz' => 'PCI Express x16',
            'producto_id' => '34',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '8',
            'ancho_datos' => '256',
            'frecuencia' => '1244',
            'tipo_interfaz' => 'PCI Express x16 3.0',
            'producto_id' => '35',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '4',
            'ancho_datos' => '128',
            'frecuencia' => '1647',
            'tipo_interfaz' => 'PCI Express x16 4.0',
            'producto_id' => '36',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '8',
            'ancho_datos' => '128',
            'frecuencia' => '1845',
            'tipo_interfaz' => 'PCI Express 4.0',
            'producto_id' => '38',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '4',
            'ancho_datos' => '128',
            'frecuencia' => '1620',
            'tipo_interfaz' => 'PCI Express x16 3.0',
            'producto_id' => '39',
            'status' => '1',
        ]);

        DB::table('tarjetas_videos')->insert([ 
            'memoria_adaptador' => '8',
            'ancho_datos' => '256',
            'frecuencia' => '1620',
            'tipo_interfaz' => 'PCI Express x16 3.0',
            'producto_id' => '40',
            'status' => '1',
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class almacenamiento_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_41_1.JPG',
            'producto_id' => '41',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_41_2.JPG',
            'producto_id' => '41',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_41_3.JPG',
            'producto_id' => '41',
            'status' => '1',
        ]);
        
    }
}

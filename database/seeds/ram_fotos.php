<?php

use Illuminate\Database\Seeder;

class ram_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_51_1.JPG',
            'producto_id' => '51',
            'status' => '1',
        ]);

	    DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_52_1.JPG',
            'producto_id' => '52',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_52_2.JPG',
            'producto_id' => '52',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_53_1.JPG',
            'producto_id' => '53',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_53_2.JPG',
            'producto_id' => '53',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_54_1.JPG',
            'producto_id' => '54',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_54_2.JPG',
            'producto_id' => '54',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_55_1.JPG',
            'producto_id' => '55',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_56_1.JPG',
            'producto_id' => '56',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_56_2.JPG',
            'producto_id' => '56',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_57_1.JPG',
            'producto_id' => '57',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_57_2.JPG',
            'producto_id' => '57',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_58_1.JPG',
            'producto_id' => '58',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_58_2.JPG',
            'producto_id' => '58',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_59_1.JPG',
            'producto_id' => '59',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_60_1.JPG',
            'producto_id' => '60',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_60_2.JPG',
            'producto_id' => '60',
            'status' => '1',
        ]);
    }
}

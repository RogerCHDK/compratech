<?php

use Illuminate\Database\Seeder;

class gabinete_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_61_1.JPG',
            'producto_id' => '61',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_61_2.JPG',
            'producto_id' => '61',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_61_3.JPG',
            'producto_id' => '61',
            'status' => '1',
        ]);

	    DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_62_1.JPG',
            'producto_id' => '62',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_63_1.JPG',
            'producto_id' => '63',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_63_2.JPG',
            'producto_id' => '63',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_64_1.JPG',
            'producto_id' => '64',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_64_2.JPG',
            'producto_id' => '64',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_65_1.JPG',
            'producto_id' => '65',
            'status' => '1',
        ]);
	    DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_65_2.JPG',
            'producto_id' => '65',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_66_1.JPG',
            'producto_id' => '66',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_67_1.JPG',
            'producto_id' => '67',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_67_2.JPG',
            'producto_id' => '67',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_67_3.JPG',
            'producto_id' => '67',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_68_1.JPG',
            'producto_id' => '68',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_68_2.JPG',
            'producto_id' => '68',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_68_3.JPG',
            'producto_id' => '68',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_69_1.JPG',
            'producto_id' => '69',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'id_70_1.JPG',
            'producto_id' => '70',
            'status' => '1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class mouse_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'B07003CZV00087.JPG',
            'producto_id' => '81',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'X6W31AAABL.JPG',
            'producto_id' => '82',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '910-005647.JPG',
            'producto_id' => '83',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'V0L79AAABL.JPG',
            'producto_id' => '84',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '910-001799.JPG',
            'producto_id' => '85',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '910-004940.JPG',
            'producto_id' => '86',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '910-004284.JPG',
            'producto_id' => '87',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '1000231567.JPG',
            'producto_id' => '88',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '910-005769.JPG',
            'producto_id' => '89',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '6440DN1.JPG',
            'producto_id' => '90',
            'status' => '1',
        ]);
    }
}

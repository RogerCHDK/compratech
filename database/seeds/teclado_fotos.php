<?php

use Illuminate\Database\Seeder;

class teclado_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'KEYBOARD KB216-BK-LTN.JPG',
            'producto_id' => '91',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '920-009594.JPG',
            'producto_id' => '92',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => '920-006346.JPG',
            'producto_id' => '93',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => '1000229315.JPG',
            'producto_id' => '94',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'B07003ZFMM00043.JPG',
            'producto_id' => '95',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'KM717-GY-LTN WIRELESS.JPG',
            'producto_id' => '96',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => '6440NFWS LXM-00003.JPG',
            'producto_id' => '97',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'K52800WW.JPG',
            'producto_id' => '98',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => '920-009595.JPG',
            'producto_id' => '99',
            'status' => '1',
        ]);
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'RZ03-02861400-R311.JPG',
            'producto_id' => '100',
            'status' => '1',
        ]);
    }
}

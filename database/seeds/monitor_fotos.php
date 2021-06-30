<?php

use Illuminate\Database\Seeder;

class monitor_fotos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'LC24F390FHLXZX.JPG',
            'producto_id' => '71',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'SE2719HR.JPG',
            'producto_id' => '72',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'LC27T550FDLXZX.JPG',
            'producto_id' => '73',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '27UL500-W.AWM.JPG',
            'producto_id' => '74',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '27MK600M-W.AWM.JPG',
            'producto_id' => '75',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '2QU11AAABA.JPG',
            'producto_id' => '76',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'LS22F350FHLXZX.JPG',
            'producto_id' => '77',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '24MP59G.JPG',
            'producto_id' => '78',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => '27GL650F-B.AWM.JPG',
            'producto_id' => '79',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'TMAU-027.JPG',
            'producto_id' => '80',
            'status' => '1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class fotos_tarjeta_video extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //tarjeta 1
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_1.1.jpg',
            'producto_id' => '31',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_1.2.jpg',
            'producto_id' => '31',
            'status' => '1',
        ]);

         //tarjeta 2
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_2.1.jpg',
            'producto_id' => '32',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_2.2.jpg',
            'producto_id' => '32',
            'status' => '1',
        ]);

        //tarjeta 3
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_3.1.jpg',
            'producto_id' => '33',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_3.2.jpg',
            'producto_id' => '33',
            'status' => '1',
        ]);

        //tarjeta 4
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_4.1.jpg',
            'producto_id' => '34',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_4.2.jpg',
            'producto_id' => '34',
            'status' => '1',
        ]);

        //tarjeta 5
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_5.1.jpg',
            'producto_id' => '35',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_5.2.jpg',
            'producto_id' => '35',
            'status' => '1',
        ]);

        //tarjeta 6
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_6.1.jpg',
            'producto_id' => '36',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_6.2.jpg',
            'producto_id' => '36',
            'status' => '1',
        ]);

        //tarjeta 7
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_7.1.jpg',
            'producto_id' => '37',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_7.2.jpg',
            'producto_id' => '37',
            'status' => '1',
        ]);

         //tarjeta 8
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_8.1.jpg',
            'producto_id' => '38',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_8.2.jpg',
            'producto_id' => '38',
            'status' => '1',
        ]);

         //tarjeta 9
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_9.1.jpg',
            'producto_id' => '39',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_9.2.jpg',
            'producto_id' => '39',
            'status' => '1',
        ]);

         //tarjeta 10
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_10.1.jpg',
            'producto_id' => '40',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'video_10.2.jpg',
            'producto_id' => '40',
            'status' => '1',
        ]);

    }
}

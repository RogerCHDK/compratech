<?php

use Illuminate\Database\Seeder;

class fotos_tarjeta_madre extends Seeder
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
            'ruta' => 'madre_1.1.jpg',
            'producto_id' => '21',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_1.2.jpg',
            'producto_id' => '21',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_1.3.jpg',
            'producto_id' => '21',
            'status' => '1',
        ]);

        //tarjeta 2
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_2.1.jpg',
            'producto_id' => '22',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_2.2.jpg',
            'producto_id' => '22',
            'status' => '1',
        ]);

         //tarjeta 3
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_3.1.jpg',
            'producto_id' => '23',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_3.2.jpg',
            'producto_id' => '23',
            'status' => '1',
        ]);

         //tarjeta 4
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_4.1.jpg',
            'producto_id' => '24',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_4.2.jpg',
            'producto_id' => '24',
            'status' => '1',
        ]);

        //tarjeta 5
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_5.1.jpg',
            'producto_id' => '25',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_5.2.jpg',
            'producto_id' => '25',
            'status' => '1',
        ]);

        //tarjeta 6
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_6.1.jpg',
            'producto_id' => '26',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_6.2.jpg',
            'producto_id' => '26',
            'status' => '1',
        ]);

        //tarjeta 7
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_7.1.jpg',
            'producto_id' => '27',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_7.2.jpg',
            'producto_id' => '27',
            'status' => '1',
        ]);

        //tarjeta 8
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_8.1.jpg',
            'producto_id' => '28',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_8.2.jpg',
            'producto_id' => '28',
            'status' => '1',
        ]);

        //tarjeta 9
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_9.1.jpg',
            'producto_id' => '29',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_9.2.jpg',
            'producto_id' => '29',
            'status' => '1',
        ]);

        //tarjeta 10
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_10.1.jpg',
            'producto_id' => '30',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'madre_10.2.jpg',
            'producto_id' => '30',
            'status' => '1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class fotos_procesador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //procesador 1
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_1.1.jpg',
            'producto_id' => '11',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_1.2.jpg',
            'producto_id' => '11',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_1.3.jpg',
            'producto_id' => '11',
            'status' => '1',
        ]);

         //procesador 2
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_2.1.jpg',
            'producto_id' => '12',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_2.2.jpg',
            'producto_id' => '12',
            'status' => '1',
        ]);

         //procesador 3
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_3.1.jpg',
            'producto_id' => '13',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_3.2.jpg',
            'producto_id' => '13',
            'status' => '1',
        ]);

         //procesador 4
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_4.1.jpg',
            'producto_id' => '14',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_4.2.jpg',
            'producto_id' => '14',
            'status' => '1',
        ]);

        //procesador 5
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_5.1.jpg',
            'producto_id' => '15',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_5.2.jpg',
            'producto_id' => '15',
            'status' => '1',
        ]);

        //procesador 6
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_6.1.jpg',
            'producto_id' => '16',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_6.2.jpg',
            'producto_id' => '16',
            'status' => '1',
        ]);

        //procesador 7
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_7.1.jpg',
            'producto_id' => '17',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_7.2.jpg',
            'producto_id' => '17',
            'status' => '1',
        ]);

        //procesador 8
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_8.1.jpg',
            'producto_id' => '18',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_8.2.jpg',
            'producto_id' => '18',
            'status' => '1',
        ]);

         //procesador 9
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_9.1.jpg',
            'producto_id' => '19',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_9.2.jpg',
            'producto_id' => '19',
            'status' => '1',
        ]);

         //procesador 10
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_10.1.jpg',
            'producto_id' => '20',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'procesador_10.2.jpg',
            'producto_id' => '20',
            'status' => '1',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class fotos_fuente_poder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fuente 1
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_1.1.jpg',
            'producto_id' => '1',
            'status' => '1',
        ]); 

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_1.2.jpg',
            'producto_id' => '1',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_1.3.jpg',
            'producto_id' => '1',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_1.4.jpg',
            'producto_id' => '1',
            'status' => '1',
        ]);

         //fuente 2
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_2.1.jpg',
            'producto_id' => '2',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_2.2.jpg',
            'producto_id' => '2',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_2.3.jpg',
            'producto_id' => '2',
            'status' => '1',
        ]);

         //fuente 3
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_3.1.jpg',
            'producto_id' => '3',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_3.2.jpg',
            'producto_id' => '3',
            'status' => '1',
        ]);
        
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_3.3.jpg',
            'producto_id' => '3',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_3.4.jpg',
            'producto_id' => '3',
            'status' => '1',
        ]);

        //fuente 4
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_4.1.jpg',
            'producto_id' => '4',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_4.2.jpg',
            'producto_id' => '4',
            'status' => '1',
        ]);

        //fuente 5
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_5.1.jpg',
            'producto_id' => '5',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_5.2.jpg',
            'producto_id' => '5',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_5.3.jpg',
            'producto_id' => '5',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_5.4.jpg',
            'producto_id' => '5',
            'status' => '1',
        ]);

        //fuente 6
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_6.1.jpg',
            'producto_id' => '6',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_6.2.jpg',
            'producto_id' => '6',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_6.3.jpg',
            'producto_id' => '6',
            'status' => '1',
        ]);

         //fuente 7
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_7.1.jpg',
            'producto_id' => '7',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_7.2.jpg',
            'producto_id' => '7',
            'status' => '1',
        ]);

         //fuente 8
         DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_8.1.jpg',
            'producto_id' => '8',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_8.2.jpg',
            'producto_id' => '8',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_8.3.jpg',
            'producto_id' => '8',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_8.4.jpg',
            'producto_id' => '8',
            'status' => '1',
        ]);

        //fuente 9
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_9.1.jpg',
            'producto_id' => '9',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_9.2.jpg',
            'producto_id' => '9',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_9.3.jpg',
            'producto_id' => '9',
            'status' => '1',
        ]);

        //fuente 10
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_10.1.jpg',
            'producto_id' => '10',
            'status' => '1',
        ]);
        
        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_10.2.jpg',
            'producto_id' => '10',
            'status' => '1',
        ]);

        DB::table('fotos_productos')->insert([ 
            'ruta' => 'fuente_10.3.jpg',
            'producto_id' => '10',
            'status' => '1',
        ]);

    }
}

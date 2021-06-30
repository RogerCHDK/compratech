<?php

use Illuminate\Database\Seeder;

class mouse extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([ 
            'marca' => 'Microsoft',
            'nombre' => 'B07003I/CZV-00087',
            'precio' => '1999',  
            'descripcion' => 'Arc Mouse, color Rojo',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'HP',
            'nombre' => 'X6W31AA#ABL',
            'precio' => '259',  
            'descripcion' => 'Mouse inalámbrico HP 200 , color Negro',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '910-005647',
            'precio' => '1519',  
            'descripcion' => 'Mouse inalámbrico avanzado MX Master 3, color Negro',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'HP',
            'nombre' => 'V0L79AA#ABL',
            'precio' => '499',  
            'descripcion' => 'Mouse Inalambrico Z3700, color Negro',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '910-001799',
            'precio' => '799',  
            'descripcion' => 'Mouse TrackBall inalámbrico M570, color Gris',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '910-004940',
            'precio' => '158',  
            'descripcion' => 'Mouse inalámbrico M170, color Negro',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech ',
            'nombre' => '910-004284',
            'precio' => '349',  
            'descripcion' => 'Mouse Inalambrico M280, color Negro',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'HP',
            'nombre' => '1000231567',
            'precio' => '499',  
            'descripcion' => 'Mouse HP Z3700 inalámbrico, color Multi',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '910-005769',
            'precio' => '368',  
            'descripcion' => 'Mouse óptico Bluetooth Pebble M350 , color Rosa',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Microsoft',
            'nombre' => '6440DN1',
            'precio' => '369',  
            'descripcion' => 'Mouse inalámbrico 1850, color Morado',
            'stock' => '54',
            'categoria_id' => '10',
            'status' => '1',
        ]);
    }
}

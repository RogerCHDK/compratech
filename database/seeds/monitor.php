<?php

use Illuminate\Database\Seeder;

class monitor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([ 
            'marca' => 'Samsung',
            'nombre' => 'LC24F390FHLXZX',
            'precio' => '3399',  
            'descripcion' => 'Monitor IPS LED FHD FreeSync, tamaño 24, color Negro',
            'stock' => '129',
            'categoria_id' => '11',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Dell',
            'nombre' => 'SE2719HR',
            'precio' => '5999',  
            'descripcion' => 'Monitor IPS LED FHD FreeSync, tamaño 27", color Negro',
            'stock' => '123',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'Samsung',
            'nombre' => 'LC27T550FDLXZX',
            'precio' => '7199',  
            'descripcion' => 'Monitor  Curved Monitor con curvatura óptima 1000R, tamaño 27", color Negro',
            'stock' => '154',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'LG',
            'nombre' => '27UL500-W.AWM',
            'precio' => '8199',  
            'descripcion' => 'Monitor IPS LED 4K UHD FreeSync con HDR, tamaño 27", color Plata',
            'stock' => '12',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'LG',
            'nombre' => '27MK600M-W.AWM',
            'precio' => '5299',  
            'descripcion' => 'Monitor Full HD LED, tamaño 27", color Blanco',
            'stock' => '32',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'HP',
            'nombre' => '2QU11AA#ABA',
            'precio' => '3299',  
            'descripcion' => 'Monitor LED Full HD, tamaño 22", color Negro',
            'stock' => '54',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'Samsung',
            'nombre' => 'LS22F350FHLXZX',
            'precio' => '2799',  
            'descripcion' => 'Monitor Full HD con diseño Super Slim, tamaño 22", color Negro',
            'stock' => '76',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'LG',
            'nombre' => '24MP59G',
            'precio' => '4199',  
            'descripcion' => 'Monitor Gaming IPS LED FHD, tamaño 24", color Negro',
            'stock' => '31',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'LG',
            'nombre' => '27GL650F-B.AWM',
            'precio' => '8199',  
            'descripcion' => 'Monitor de gaming UltraGear IPS LED FHD FreeSync, tamaño 27", color Negro',
            'stock' => '87',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'TMAU-027',
            'precio' => '10499',  
            'descripcion' => 'Monitor Gaming VA326H, tamaño 31.5", color Blanco',
            'stock' => '43',
            'categoria_id' => '11',
            'status' => '1',
        ]);
        
    }
}

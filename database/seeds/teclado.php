<?php

use Illuminate\Database\Seeder;

class teclado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([ 
            'marca' => 'Dell',
            'nombre' => 'KEYBOARD KB216-BK-LTN',
            'precio' => '299',  
            'descripcion' => 'Teclado KB216, color Negro',
            'stock' => '54',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '920-009594',
            'precio' => '799',  
            'descripcion' => 'Teclado Inalámbrico Multidispositivo K380 , color Rosa',
            'stock' => '12',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '920-006346',
            'precio' => '999',  
            'descripcion' => 'Teclado Bluetooth K480 920-006346, color Negro',
            'stock' => '67',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Acteck ',
            'nombre' => '1000229315',
            'precio' => '719',  
            'descripcion' => 'Teclado Inalámbrico Bluetooth, color Negro',
            'stock' => '89',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Microsoft',
            'nombre' => 'B07003Z/FMM-00043',
            'precio' => '3299',  
            'descripcion' => 'Teclado para Surface Pro Signature Type Cover, color Negro',
            'stock' => '43',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Dell ',
            'nombre' => 'KM717-GY-LTN WIRELESS',
            'precio' => '2549',  
            'descripcion' => 'Teclado y mouse inalámbrico KM717, color Negro',
            'stock' => '34',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Microsoft',
            'nombre' => '6440NFW / LXM-00003',
            'precio' => '4489',  
            'descripcion' => 'Teclado ergonómico alámbrico, color Negro',
            'stock' => '18',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Kensington',
            'nombre' => 'K52800WW',
            'precio' => '299',  
            'descripcion' => ' ErgoSoft para teclados slim, color Blanco',
            'stock' => '27',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Logitech',
            'nombre' => '920-009595',
            'precio' => '799',  
            'descripcion' => ' Teclado Inalámbrico Multidispositivo K380, color Blanco',
            'stock' => '28',
            'categoria_id' => '9',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Razer',
            'nombre' => 'RZ03-02861400-R311',
            'precio' => '2899',  
            'descripcion' => 'Teclado mecánico de gaming alámbrico BlackWidow con iluminación RGB, color Negro',
            'stock' => '42',
            'categoria_id' => '9',
            'status' => '1',
        ]);
    }
}

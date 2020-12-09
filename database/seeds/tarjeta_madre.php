<?php

use Illuminate\Database\Seeder;

class tarjeta_madre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'AMD',
            'circuito_integrado' => 'AMD B450',
            'socket_procesador' => 'AM4',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '21',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'AMD',
            'circuito_integrado' => 'AMD A320',
            'socket_procesador' => 'AM4',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '22',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'AMD',
            'circuito_integrado' => 'AMD B450',
            'socket_procesador' => 'AM4',
            'memoria_interna' => '64',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '23',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'AMD',
            'circuito_integrado' => 'AMD A320',
            'socket_procesador' => 'AM4',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '24',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'AMD',
            'circuito_integrado' => 'AMD B450',
            'socket_procesador' => 'AM4',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '25',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'Intel',
            'circuito_integrado' => 'Intel H310',
            'socket_procesador' => 'LGA1151',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '26',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'Intel',
            'circuito_integrado' => 'Intel B365',
            'socket_procesador' => 'LGA1151',
            'memoria_interna' => '64',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '27',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'Intel',
            'circuito_integrado' => 'Intel H310',
            'socket_procesador' => 'LGA1151',
            'memoria_interna' => '32',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '28',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'Intel',
            'circuito_integrado' => 'Intel B365',
            'socket_procesador' => 'LGA1151',
            'memoria_interna' => '64',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '29',
            'status' => '1',
        ]);

        DB::table('tarjetas_madres')->insert([ 
            'familia_procesador' => 'Intel',
            'circuito_integrado' => 'Intel B365',
            'socket_procesador' => 'LGA1151',
            'memoria_interna' => '64',
            'tipo_memoria' => 'DDR4-SDRAM',
            'producto_id' => '30',
            'status' => '1',
        ]);


    }
}

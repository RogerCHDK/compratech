<?php

use Illuminate\Database\Seeder;

class ram extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3000',
            'latencia' => '16',
            'producto_id' => '51',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '2666',
            'latencia' => '16',
            'producto_id' => '52',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3000',
            'latencia' => '16',
            'producto_id' => '53',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3200',
            'latencia' => '16',
            'producto_id' => '54',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '2400',
            'latencia' => '17',
            'producto_id' => '55',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '16',
            'velocidad' => '3200',
            'latencia' => '16',
            'producto_id' => '56',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3200',
            'latencia' => '16',
            'producto_id' => '57',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3000',
            'latencia' => '16',
            'producto_id' => '58',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '2666',
            'latencia' => '16',
            'producto_id' => '59',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'tipo_memoria' => 'DDR4',
            'memoria_interna' => '8',
            'velocidad' => '3000',
            'latencia' => '16',
            'producto_id' => '60',
            'status' => '1',
        ]);
    }
}

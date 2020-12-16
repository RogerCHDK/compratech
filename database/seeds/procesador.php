<?php

use Illuminate\Database\Seeder;

class procesador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('procesadores')->insert([ 
            'familia' => 'AMD Ryzen 5',
            'modelo' => '3400G',
            'socket' => 'AM4',
            'frecuencia' => '3.7',
            'numero_nucleos' => '4',
            'producto_id' => '11',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'AMD Ryzen 5',
            'modelo' => '2600',
            'socket' => 'AM4',
            'frecuencia' => '3.4',
            'numero_nucleos' => '6',
            'producto_id' => '12',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'Intel Core i5-10xxx',
            'modelo' => 'i5-10400F',
            'socket' => 'LGA 1200',
            'frecuencia' => '4.3',
            'numero_nucleos' => '6',
            'producto_id' => '13',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'AMD Ryzen 7',
            'modelo' => '3700X',
            'socket' => 'AM4',
            'frecuencia' => '3.6',
            'numero_nucleos' => '8',
            'producto_id' => '14',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'Intel Core i3-9xxx',
            'modelo' => 'i3-9100F',
            'socket' => 'LGA1151',
            'frecuencia' => '3.6',
            'numero_nucleos' => '4',
            'producto_id' => '15',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'Intel Core Processors',
            'modelo' => 'i5-9400F',
            'socket' => 'LGA1151',
            'frecuencia' => '2.9',
            'numero_nucleos' => '6',
            'producto_id' => '16',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'Intel Core i3 de 10ma Generación',
            'modelo' => 'i3-10100',
            'socket' => 'LGA 1200',
            'frecuencia' => '3.6',
            'numero_nucleos' => '4',
            'producto_id' => '17',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'AMD Ryzen 9',
            'modelo' => '3900X',
            'socket' => 'AM4',
            'frecuencia' => '3.8',
            'numero_nucleos' => '12',
            'producto_id' => '18',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'AMD Ryzen 5',
            'modelo' => '5600X',
            'socket' => 'AM4',
            'frecuencia' => '4.6',
            'numero_nucleos' => '6',
            'producto_id' => '19',
            'status' => '1',
        ]);

        DB::table('procesadores')->insert([ 
            'familia' => 'Intel Core Processors',
            'modelo' => 'i9-9900K',
            'socket' => 'LGA1151',
            'frecuencia' => '3.6',
            'numero_nucleos' => '8',
            'producto_id' => '20',
            'status' => '1',
        ]);

    }
}

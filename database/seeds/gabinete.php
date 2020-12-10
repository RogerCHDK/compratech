<?php

use Illuminate\Database\Seeder;

class gabinete extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'ATX,Micro ATX,Mini-ITX',
            'producto_id' => '61',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Torre',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'Micro ATX,Mini-ITX',
            'producto_id' => '62',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'ATX,EATX,Micro ATX,Mini-ITX',
            'producto_id' => '63',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'ATX,Micro ATX,Mini-ITX',
            'producto_id' => '64',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'ATX',
            'producto_id' => '65',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'Micro ATX,Mini-ITX',
            'producto_id' => '66',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '5',
            'tarjeta_madre_soportada' => 'ATX,EATX,Micro ATX,Mini-ATX',
            'producto_id' => '67',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Midi-Tower',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'ATX,Micro ATX,Mini-ITX',
            'producto_id' => '68',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Torre',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'Micro ATX,Mini-ITX',
            'producto_id' => '69',
            'status' => '1',
        ]);

        DB::table('ram')->insert([ 
            'factor_forma' => 'Torre',
            'puertos_usb' => '2',
            'tarjeta_madre_soportada' => 'Micro ATX,Mini-ITX',
            'producto_id' => '70',
            'status' => '1',
        ]);
    }
}

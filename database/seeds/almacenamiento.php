<?php

use Illuminate\Database\Seeder;

class almacenamiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA III',
            'capacidad' => '500',
            'velocidad_rotacion' => '7200',
            'tipo_almacenamiento' => 'disco duro',
            'producto_id' => '41',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA',
            'capacidad' => '1000',
            'velocidad_rotacion' => '7200',
            'tipo_almacenamiento' => 'disco duro',
            'producto_id' => '42',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA III',
            'capacidad' => '1000',
            'velocidad_rotacion' => '7200',
            'tipo_almacenamiento' => 'disco duro',
            'producto_id' => '43',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '2000',
            'velocidad_rotacion' => '7200',
            'tipo_almacenamiento' => 'disco duro',
            'producto_id' => '44',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '1000',
            'velocidad_rotacion' => '5400',
            'tipo_almacenamiento' => 'disco duro',
            'producto_id' => '45',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '120',
            'velocidad_rotacion' => '500',
            'tipo_almacenamiento' => 'ssd',
            'producto_id' => '46',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '128',
            'velocidad_rotacion' => '510',
            'tipo_almacenamiento' => 'ssd',
            'producto_id' => '47',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '1000',
            'velocidad_rotacion' => '5400',
            'tipo_almacenamiento' => 'sshd',
            'producto_id' => '48',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '480',
            'velocidad_rotacion' => '1',
            'tipo_almacenamiento' => 'sshd',
            'producto_id' => '49',
            'status' => '1',
        ]);

        DB::table('almacenamiento')->insert([ 
            'interface' => 'SATA 6.0 Gb/s',
            'capacidad' => '500',
            'velocidad_rotacion' => '560',
            'tipo_almacenamiento' => 'ssd',
            'producto_id' => '50',
            'status' => '1',
        ]);
        
    }
}

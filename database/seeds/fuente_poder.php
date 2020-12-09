<?php

use Illuminate\Database\Seeder;

class fuente_poder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS',
            'potencia' => '550',
            'diametro' => '12',
            'numero_conectores' => '5',
            'producto_id' => '1',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => 'Sin certificacion',
            'potencia' => '600',
            'diametro' => '12',
            'numero_conectores' => '3',
            'producto_id' => '2',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS Bronze',
            'potencia' => '550',
            'diametro' => '12',
            'numero_conectores' => '6',
            'producto_id' => '3',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS Bronze',
            'potencia' => '400',
            'diametro' => '12',
            'numero_conectores' => '5',
            'producto_id' => '4',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS Bronze',
            'potencia' => '650',
            'diametro' => '12',
            'numero_conectores' => '6',
            'producto_id' => '5',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS White',
            'potencia' => '500',
            'diametro' => '12',
            'numero_conectores' => '4',
            'producto_id' => '6',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS Bronze',
            'potencia' => '500',
            'diametro' => '12',
            'numero_conectores' => '6',
            'producto_id' => '7',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS White',
            'potencia' => '750',
            'diametro' => '12',
            'numero_conectores' => '9',
            'producto_id' => '8',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => '80 PLUS White',
            'potencia' => '700',
            'diametro' => '12',
            'numero_conectores' => '9',
            'producto_id' => '9',
            'status' => '1',
        ]);

        DB::table('fuentes_poder')->insert([ 
            'factor_forma' => 'ATX',
            'alimentador_energia' => '24-pin ATX',
            'certificacion' => 'Sin certificacion',
            'potencia' => '520',
            'diametro' => '12',
            'numero_conectores' => '2',
            'producto_id' => '10',
            'status' => '1',
        ]);

        

    }
}

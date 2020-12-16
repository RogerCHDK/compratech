<?php

use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var1[1]='ram'; 
        $var1[2]='gabinete';
        $var1[3]='almacenamiento';
        $var1[4]='tarjeta madre';
        $var1[5]='tarjeta de video';
        $var1[6]='procesador';
        $var1[7]='fuente de poder';
        $var1[8]='computadora';
        $var1[9]='teclado';
        $var1[10]='mouse';
        $var1[11]='monitor';

        for ($i=1; $i <=11 ; $i++) { 
            DB::table('categorias')->insert([ 
                'nombre' => $var1[$i],
                'status' => '1',
            ]);
            }
    }
}

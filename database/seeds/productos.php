<?php

use Illuminate\Database\Seeder;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fuentes de poder 
        DB::table('productos')->insert([ 
            'marca' => 'Thermaltake',
            'nombre' => 'LTP-550NL2NK',
            'precio' => '789.00',
            'descripcion' => 'Con la incorporación de diversos componentes de alta calidad en la nueva serie Litepower – modelos que se clasifican desde los 350W hasta los 650W – Ahorra energía a través de su alta eficiencia de hasta un 85%, adaptándose a los requisitos más exigentes. Un ventilador inteligente incorporado ofrece un excelente flujo de aire con un nivel de ruido excepcionalmente bajo. Además, el diseño del carril +12 V permite el uso sin parar con un rendimiento estable y fiable.',
            'stock' => '150',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Acteck ',
            'nombre' => 'Z-600',
            'precio' => '517.00',
            'descripcion' => 'Suficientes conectores para alimentar Mother board, DVD, DD, 2 ventiladores, se puede instalar en el gabinete con el ventilador en ambas direcciones hacia arriba y hacia abajo, facil instalacion 10 min., trae los tornillos de sugecion, ventilador luminoso en 3 colores a la vez, cilencioso, incluye cable de alimentacion CA',
            'stock' => '70',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Giagbyte',
            'nombre' => 'P550B',
            'precio' => '1249.00',
            'descripcion' => 'Fuente de Poder Giagbyte P550B 80 PLUS Bronze, 20+4 pin ATX, 120mm, 550W',
            'stock' => '215',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Game Factor',
            'nombre' => 'PSG400 ',
            'precio' => '979.00',
            'descripcion' => 'Fuente de Poder Game Factor PSG400 80 PLUS Bronze, 20+4 pin ATX, 120mm, 400W, Negro',
            'stock' => '244',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'P650B',
            'precio' => '1769.00',
            'descripcion' => 'Fuente de Poder Gigabyte P650B 80 PLUS Bronze, 20+4 pin ATX, 120mm, 650W',
            'stock' => '22',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Yeyian ',
            'nombre' => 'Raiden ',
            'precio' => '1099.00',
            'descripcion' => 'Fuente de Poder Yeyian Raiden 80 PLUS White, ATX, 120mm, 500W',
            'stock' => '340',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'EVGA',
            'nombre' => 'EVGA',
            'precio' => '1599.00',
            'descripcion' => 'Fuente de Poder EVGA 500 BR 80 PLUS Bronze, 24-pin ATX, 120mm, 500W',
            'stock' => '200',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'EVGA',
            'nombre' => '100-N1-0750-L1',
            'precio' => '2409.00',
            'descripcion' => 'Fuente de Poder EVGA 100-N1-0750-L1, 20+4 pin ATX, 120mm, 750W',
            'stock' => '100',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'EVGA',
            'nombre' => 'B1',
            'precio' => '1499.00',
            'descripcion' => 'Fuente de Poder EVGA 700W B1 80 PLUS White, 24-pin ATX, 120mm, 700W',
            'stock' => '130',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'True Basix',
            'nombre' => 'TB-924894',
            'precio' => '290.00',
            'descripcion' => 'Fuente de Poder EVGA 700W B1 80 PLUS White, 24-pin ATX, 120mm, 700W',
            'stock' => '50',
            'categoria_id' => '7',
            'status' => '1',
        ]); 

        //procesadores 
        DB::table('productos')->insert([ 
            'marca' => 'AMD',
            'nombre' => 'Ryzen 5 3400G',
            'precio' => '4549.00',
            'descripcion' => 'Procesador AMD Ryzen 5 3400G con Gráficos Radeon RX Vega 11, S-AM4, 3.70GHz, Quad-Core, 4MB L3, con Disipador Wraith Spire',
            'stock' => '125',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'AMD',
            'nombre' => 'Ryzen 5 2600',
            'precio' => '3589.00',
            'descripcion' => 'Procesador AMD Ryzen 5 2600, S-AM4, 3.40GHz, Six-Core, 16MB L3 Cache, con Disipador Wraith Stealth',
            'stock' => '150',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Intel',
            'nombre' => 'Core i5-10400F',
            'precio' => '3579.00',
            'descripcion' => 'Procesador Intel Core i5-10400F, S-1200, 2.90GHz, Six-Core, 12MB Cache (10ma. Generación - Comet Lake) ― Requiere Gráficos Discretos',
            'stock' => '238',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'AMD',
            'nombre' => 'Ryzen 7 3700X',
            'precio' => '7319.00',
            'descripcion' => 'Procesador AMD Ryzen 7 3700X, S-AM4, 3.60GHz, 8-Core, 32MB L3, con Disipador Wraith Prism RGB',
            'stock' => '134',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Intel',
            'nombre' => 'Core i3-9100F',
            'precio' => '1819.00',
            'descripcion' => 'Procesador Intel Core i3-9100F, S-1151, 3.60GHz, Quad-Core, 6MB Cache (9na. Generación - Coffee Lake)',
            'stock' => '150',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Intel',
            'nombre' => 'Core i5-9400F',
            'precio' => '3229.00',
            'descripcion' => 'Procesador Intel Core i5-9400F, S-1151, 2.90GHz, Six-Core, 9MB Smart Cache (9na. Generación Coffee Lake)',
            'stock' => '150',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Intel',
            'nombre' => 'Core i3-10100',
            'precio' => '2649.00',
            'descripcion' => 'Procesador Intel Core i3-10100, S-1200, 3,60GHz, Quad-Core, 6MB Smart Caché (10ma. Generación - Comet Lake)',
            'stock' => '145',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'AMD',
            'nombre' => 'Ryzen 9 3900X',
            'precio' => '12839.00',
            'descripcion' => 'Procesador AMD Ryzen 9 3900X, S-AM4, 3.80GHz, 12-Core, 64MB L3, con Disipador Wraith Prism RGB',
            'stock' => '200',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'AMD',
            'nombre' => 'Ryzen 5 5600X',
            'precio' => '6999.00',
            'descripcion' => 'Procesador AMD Ryzen 5 5600X, S-AM4, 3.70GHz, 32MB L3 Cache - incluye Disipador Wraith Stealth',
            'stock' => '156',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Intel',
            'nombre' => 'Core i9-9900K',
            'precio' => '9059.00',
            'descripcion' => 'Procesador Intel Core i9-9900K, S-1151, 3.60GHz, 8-Core, 16MB Smart Cache (9na. Generación Coffee Lake)',
            'stock' => '67',
            'categoria_id' => '6',
            'status' => '1',
        ]); 

        //tarjetas madres
        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'B450',
            'precio' => '1869.00',
            'descripcion' => 'Tarjeta Madre Gigabyte Micro ATX B450M H, S-AM4, AMD B450, HDMI, 32GB DDR4 para AMD',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'PRIME A320M-K',
            'precio' => '1809.00',
            'descripcion' => 'Tarjeta Madre ASUS micro ATX MB PRIME A320M-K, S-AM4, AMD A320, HDMI, 32GB DDR4 para AMD ― Requiere Actualización de Bios para la Serie Ryzen 3000',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'PRIME B450M-A/CSM',
            'precio' => '2469.00',
            'descripcion' => 'Tarjeta Madre ASUS micro ATX PRIME B450M-A/CSM, S-AM4, AMD B450, HDMI, 64GB DDR4 para AMD',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte ',
            'nombre' => 'GA-A320M-H',
            'precio' => '1349.00',
            'descripcion' => 'Tarjeta Madre Gigabyte Micro ATX GA-A320M-H, S-AM4, AMD A320, HDMI, 32GB DDR4 para AMD ― Requiere Actualización de Bios para la Serie Ryzen 3000',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'ASRock',
            'nombre' => 'B450M Steel Legend',
            'precio' => '2239.00',
            'descripcion' => 'Tarjeta Madre ASRock Micro ATX B450M Steel Legend, S-AM4, AMD B450, HDMI, 64GB DDR4 para AMD',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'PRIME H310M',
            'precio' => '1379.00',
            'descripcion' => 'Tarjeta Madre ASUS micro ATX PRIME H310M-E R2.0, S-1151, Intel H310, HDMI, 32GB DDR4 para Intel ― Compatibles solo con 8va y/o 9va Generación',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'B365M DS3H',
            'precio' => '1639.00',
            'descripcion' => 'Tarjeta Madre Gigabyte Micro ATX B365M DS3H, S-1151, Intel B365, HDMI, 64GB DDR4 para Intel',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'H310M H 2.0',
            'precio' => '1369.00',
            'descripcion' => 'Tarjeta Madre Gigabyte Micro ATX H310M H 2.0 (Rev. 1.0), S-1151, Intel H310, HDMI, 32GB DDR4 para Intel',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'AORUS',
            'nombre' => 'B365 M ELITE',
            'precio' => '2189.00',
            'descripcion' => 'Tarjeta Madre AORUS Micro ATX B365 M ELITE, S-1151, Intel B365, HDMI, 64GB DDR4 para Intel',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'Prime B365M-A',
            'precio' => '1969.00',
            'descripcion' => 'Tarjeta Madre ASUS micro ATX Prime B365M-A, S-1151, Intel B365, HDMI, 64GB DDR4 para Intel',
            'stock' => '99',
            'categoria_id' => '4',
            'status' => '1',
        ]); 

        //tarjetas de video
        DB::table('productos')->insert([ 
            'marca' => 'Sapphire',
            'nombre' => 'Radeon RX 570 PULSE',
            'precio' => '5139.00',
            'descripcion' => 'Tarjeta de Video Sapphire AMD Radeon RX 570 PULSE, 8GB 256-bit GDDR5, PCI Express x16 3.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Sapphire',
            'nombre' => 'Radeon RX 5600 XT',
            'precio' => '7269.00',
            'descripcion' => 'Tarjeta de Video Sapphire Pulse AMD Radeon RX 5600 XT BE, 6GB 192-bit GDDR6, PCI Express 4.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'NVIDIA GeForce GT 710',
            'precio' => '1139.00',
            'descripcion' => 'Tarjeta de Video Gigabyte NVIDIA GeForce GT 710, 2GB 64-bit GDDR5, PCI Express x8 2.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'PNY',
            'nombre' => 'NVIDIA GeForce GTX 1650 Dual Fan',
            'precio' => '3909.00',
            'descripcion' => 'Tarjeta de Video PNY NVIDIA GeForce GTX 1650 Dual Fan, 4GB 128-bit GDDR6, PCI Express x16',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'AMD Radeon RX 570 GAMING',
            'precio' => '5449.00',
            'descripcion' => 'Tarjeta de Video Gigabyte AMD Radeon RX 570 GAMING, 8GB 256-bit GDDR5, PCI Express x16 3.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'AMD Radeon RX 5500 XT OC',
            'precio' => '4359.00',  
            'descripcion' => 'Tarjeta de Video Gigabyte AMD Radeon RX 5500 XT OC, 4GB 128-bit GDDR6, PCI Express x16 4.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'NVIDIA GeForce GTX 1050 Ti',
            'precio' => '3479.00',  
            'descripcion' => 'Tarjeta de Video Gigabyte NVIDIA GeForce GTX 1050 Ti OC, 4GB 128-bit GDDR5, PCI Express x16 3.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Sapphire',
            'nombre' => 'AMD Pulse Radeon RX 5500 XT',
            'precio' => '5159.00',  
            'descripcion' => 'Tarjeta de Video Sapphire AMD Pulse Radeon RX 5500 XT Gaming, 8GB 128-bit GDDR6, PCI Express 4.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'MSI',
            'nombre' => 'NVIDIA GeForce GTX 1650',
            'precio' => '4109.00',  
            'descripcion' => 'Tarjeta de Video MSI NVIDIA GeForce GTX 1650 Ventus XS OCV1, 4GB 128-bit GDDR6, PCI Express x16 3.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]); 

        DB::table('productos')->insert([ 
            'marca' => 'Gigabyte',
            'nombre' => 'NVIDIA GeForce RTX 2070',
            'precio' => '11039.00',  
            'descripcion' => 'Tarjeta de Video Gigabyte NVIDIA GeForce RTX 2070 WINDFORCE 2X , 8GB 256-bit GDDR6, PCI Express x16 3.0',
            'stock' => '99',
            'categoria_id' => '5',
            'status' => '1',
        ]);

    }
}

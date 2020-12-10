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
//////////////////////////////////////////////////////////
        DB::table('productos')->insert([ 
            'marca' => 'Hitachi',
            'nombre' => 'New Pull',
            'precio' => '495',  
            'descripcion' => 'Disco duro Hitachi SATA III, modelo HUA722020ALA330',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Seagate',
            'nombre' => 'Seagate ST1000DM003',
            'precio' => '721.96',  
            'descripcion' => 'Disco duro para ordenador de sobremesa',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Toshiba',
            'nombre' => 'Toshiba P300 HDWD110UZSVA',
            'precio' => '1019',  
            'descripcion' => 'Tamaño de 3.5", apto para pc, incrementa el rendimiento de tu equipo.',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Seagate',
            'nombre' => 'Seagate BarraCuda',
            'precio' => '1573.39',  
            'descripcion' => 'Disco duro interno para computadora de sobremesa con embalaje abrefácil, modelo ST2000DM008',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Western Digital',
            'nombre' => 'Western Digital WD Blue',
            'precio' => '1519',  
            'descripcion' => 'Disco Duro para PC, modelo WD10EZRZ',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Kingston',
            'nombre' => 'Kingston SSD A400',
            'precio' => '549',  
            'descripcion' => 'Mejora dramáticamente la capacidad de respuesta de su sistema existente con velocidades increíbles de inicio, carga y transferencia, comparadas con los discos duros mecánicos. Usando un controlador de última generación para leer y escribir a velocidades de hasta 500MB/seg y 450MB/seg1, este SSD es 10 veces más rápido que un disco duro tradicional',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Netac',
            'nombre' => 'Netac 128 GB SSD',
            'precio' => '599.99',  
            'descripcion' => 'Modelo B088BVGW54. Hasta 510MB/s de velocidades de lectura, Netac SSD N530s es la opción ideal y adecuada cuando necesita actualizar una unidad de estado sólido convencional en lugar de disco duro (HDD). En comparación con el estándar industrial, la unidad N530s de estado sólido interno de Netac admite todas las características básicas y exclusivas a un valor excepcional con tecnología 3D NAND y un rendimiento sólido.',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Seagate',
            'nombre' => 'Seagate FireCuda',
            'precio' => '1515.16',  
            'descripcion' => 'Modelo ST1000LXZ15/LX015. La unidad SSHD FireCuda se ha diseñado específicamente para ofrecer una experiencia de juego superior e un uso intensivo sostenido y la latencia más baja. Los jugadores pueden beneficiarse de un rendimiento 5 veces superior que las HDD estándar y más capacidad que las SSD.',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'SanDisk',
            'nombre' => 'SanDisk SDSSDA-480G-G26',
            'precio' => '1399',  
            'descripcion' => 'Modelo SDSSDA-480G-G26. Unidad de estado solido SSD Sandisk Plus 480GB, SATA 3, 2.5, 7mm. Ventilador de piso con opción a montarse en pared. Motor de alta capacidad, fabricado con alambre de cobre al interior. Switch de 3 velocidades rotatorias.',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Western Digital',
            'nombre' => 'WD Blue 3D NAND',
            'precio' => '1599',  
            'descripcion' => 'Modelo WDS500G2B0A. Un disco WD Blue SSD SATA 3D NAND utiliza la tecnología 3D NAND no solo para ofrecer capacidades más altas (hasta 4 TB en el factor de forma 2,5 in 7 mm1) que las generaciones anteriores de discos WD Blue SSD, sino también para ayudar a reducir la interferencia entre celdas para brindar mayor confiabilidad.',
            'stock' => '99',
            'categoria_id' => '3',
            'status' => '1',
        ]);

        ////////////////////////////////////////////////

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'XPG SPECTRIX D41 DDR4 RGB',
            'precio' => '789',  
            'descripcion' => 'Reúne un rendimiento excepcional y una iluminación LED RGB fascinante para ofrecerte una vista impactante y una impresionante actualización para tu PC o laptop',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'XPG Hunter DDR4',
            'precio' => '699',  
            'descripcion' => 'Con una placa de circuito impreso (PCB) negra moderna y un diseño limpio, XPG HUNTER, combina casi con cualquier motherboard. Con las ventajas de DDR4 y varias opciones de densidad, tu XPG HUNTER proporciona a los entusiastas del bricolaje de PC, a los jugadores y a los que les vuelve loco el overclocking.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Corsair',
            'nombre' => 'Vengeance LPX',
            'precio' => '709',  
            'descripcion' => 'Diseñado para overclocking de alto rendimiento',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'XPG SPECTRIX D60G',
            'precio' => '889',  
            'descripcion' => 'Cuenta con un diseño de tira de luz RGB doble excepcional que le da la mayor área superficial RGB de cualquier módulo de memoria! Además, cuenta con una amplia gama de frecuencias de 3000 a 4133 MHz y admite los perfiles Intel XMP 2.0 para facilitar el aumento de la velocidad del reloj.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'Adata DDR4, 2400MHz, 8GB, Non-ECC',
            'precio' => '609',  
            'descripcion' => 'Memoria RAM Adata DDR4, 2400MHz, 8GB, Non-ECC',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'XPG SPECTRIX D60G RGB',
            'precio' => '1529',  
            'descripcion' => 'DDR4, 3200MHz, 16GB, Non-ECC, CL16, XMP',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Team Group',
            'nombre' => 'TF4D48G3200HC16C01 White',
            'precio' => '909',  
            'descripcion' => 'La “R” en el difusor térmico representa la Revolución. El difusor térmico está fabricado con un material metálico más ligero y más delgado. El diseño de la “R” hueca es altamente estereoscópico y hace juego con el área luminosa ultra gran angular.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'XPG Gammix D30 Red DDR4',
            'precio' => '699',  
            'descripcion' => 'GAMMIX D30 te ofrece un rendimiento excelente con velocidades que oscilan entre 2666 MHz y 3600 MHz y es compatible con las plataformas X299 de Intel de 2666 MHz y AM4/Ryzen de AMD.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'AX4U266638G16-SBHT XPG Hunter',
            'precio' => '737',  
            'descripcion' => 'Si eres fanático de los juegos en línea o usas tu ordenador para trabajar con programas o aplicaciones pesadas, esta memoria es para ti. Gracias a su velocidad de 2666 MHz, podrás disfrutar de un alto rendimiento y hacer tus trabajos de manera rápida y efectiva.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ADATA',
            'nombre' => 'AX4U300038G16-SB41 XPG Spectrix D41',
            'precio' => '913',  
            'descripcion' => 'Si eres fanático de los juegos en línea o usas tu ordenador para trabajar con programas o aplicaciones pesadas, esta memoria es para ti. Gracias a su velocidad de 2666 MHz, podrás disfrutar de un alto rendimiento y hacer tus trabajos de manera rápida y efectiva.',
            'stock' => '99',
            'categoria_id' => '1',
            'status' => '1',
        ]);
        ///////////

        DB::table('productos')->insert([ 
            'marca' => 'Cooler Master',
            'nombre' => 'MasterBox Q500L',
            'precio' => '1579',  
            'descripcion' => 'Con Ventana, Midi-Tower, ATX/Micro-ATX/Mini-ITX, USB 3.0, sin Fuente, Negro',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Quaroni',
            'nombre' => 'Quaroni QCMT03',
            'precio' => '396',  
            'descripcion' => 'Gabinete quaroni para tecnologia micro atx, panel frontal con acceso a puertos usb 2.0, audio con un excelente diseo, elegante e innovador.',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'XPG',
            'nombre' => 'XPG BATTLECRUISER',
            'precio' => '396',  
            'descripcion' => 'Gabinete quaroni para tecnologia micro atx, panel frontal con acceso a puertos usb 2.0, audio con un excelente diseo, elegante e innovador.',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'XPG',
            'nombre' => 'XPG INVADER',
            'precio' => '1719',  
            'descripcion' => 'XPG INVADER, es nuestro gabinete de media torre, más versátil, ofreciendo dinamismo, elegancia y un diseño único que no necesita herramientas. Con alto flujo de aire, luz RGB descendente y frontal, personalizable con el controlador combinado XPG Prime ARGB.',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Aerocool',
            'nombre' => 'Aerocool Cylon',
            'precio' => '749',  
            'descripcion' => 'Elegante barra trasera LED con 13 modos de luz en el panel frontal. Seis modos de luz de flujo RGB. Siete modos de color sólido.',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Acteck',
            'nombre' => 'Acteck G200',
            'precio' => '487',  
            'descripcion' => 'USB 2.0, incluye Fuente de 500W, Negro',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'ASUS',
            'nombre' => 'ASUS ROG Strix Helios',
            'precio' => '7219',  
            'descripcion' => 'USB 3.1, sin Fuente, Negro',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'MSI',
            'nombre' => 'MSI MAG FORGE 100R',
            'precio' => '1599',  
            'descripcion' => 'Con Ventana, Midi-Tower, ATX/Micro-ATX/Mini-ATX, USB 3.2, sin Fuente, Negro',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Acteck',
            'nombre' => 'Acteck Slim Atom',
            'precio' => '629',  
            'descripcion' => '2x USB, incluye Fuente de 450W, Negro',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);

        DB::table('productos')->insert([ 
            'marca' => 'Quaroni',
            'nombre' => 'Quaroni QCMT03',
            'precio' => '396',  
            'descripcion' => 'USB 2.0, con Fuente de 400W, Negro/Plata',
            'stock' => '99',
            'categoria_id' => '2',
            'status' => '1',
        ]);
    }
}

@extends('template.master')
@section('contenido_central')
<!-- about section -->
<div class="about">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>Tu presupuesto</h2>
                    <br>
                    <ul>
                        <li><b>Procesador:</b> AMD Ryzen 5 3600 / 6 Core / 12 Thread / 3.6GHz / 4.2GHz Boost / TDP 65W / Wraith Stealth (Requiere Tarjeta de Video) / 100-100000031BOX / </li>
                        <li><b>Motherboard:</b> Asrock B450M PRO4 Socket AM4 / DDR4</li>
                        <li><b>Memoria RAM:</b> DDR4 8GBx2 (16GB) 2666MHz Kingston HyperX Fury RGB 2 Modulos</li>
                        <li><b>Tarjeta de Video:</b> Tarjeta de video NVIDIA GeForce GTX 1660 SUPER 6GB GDDR6 </li>
                        <li><b>Fuente de Poder:</b> Aerocool Cylon RGB Full Range 600W Certificacion 80+ Bronze </li>
                        <li><b>Gaabinete:</b> Yaguaret Yamato RGB / Cristal Templado / ATX / Micro ATX / Mini ITX / USB 3.0</li>
                    </ul>
                    <div class="precio-container">
                        <h3 class="precio">$19,801.00 MXN</h3>
                        <button class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>
                            Comprar
                        </button>
                    </div>
                    <p>Las existencias pueden variar sin previo aviso.</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="{!! asset('estilo/images/presupuesto2.jpg') !!}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about section -->
   @endsection()
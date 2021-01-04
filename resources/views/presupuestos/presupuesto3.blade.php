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
                        <li><b>Procesador:</b> AMD Ryzen 9 3900X / 12 Core / 24 Thread / 3.8GHz / 4.6GHz Boost / TDP 105W / Wraith Prism Whith RGB </li>
                        <li><b>Motherboard:</b> Gigabyte X570 AORUS Elite Wifi AMD Ryzen 3ra Gen. AM4 ATX</li>
                        <li><b>Memoria RAM:</b> 32GB DDR4 GSkill Trident Z RGB 3600Mhz Kit 4x8GB </li>
                        <li><b>Tarjeta de Video:</b> Nvidia GeForce RTX 3080 10GB / Asus ROG STRIX GAMING</li>
                        <li><b>Fuente de Poder:</b> 850 G5 SUPERNOVA EVGA / Certificación 80+ GOLD / Full Modular </li>
                        <li><b>Gabinete:</b>  Asus ROG Strix Helios RGB Aura Sync / Cristal Templado / USB 3.1 / E-ATX </li>
                    </ul>
                    <div class="precio-container">
                        <h3 class="precio">$66,171.00 MXN</h3>
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
                    <figure><img src="{!! asset('estilo/images/presupuesto3.jpg') !!}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about section -->
   @endsection()
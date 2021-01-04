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
                        <li><b>Procesador:</b> AMD RYZEN 3 3200G APU 3.6GHZ / 4GHZ / 4CORE / AM4 / Con disipador Wraith Stealth / Radeon VEGA 8 Integrada / YD3200C5FHBOX </li>
                        <li><b>Motherboard:</b> Gigabyte A320M-S2H AMD AM4 A320 Micro ATX GA-A320M-S2H</li>
                        <li><b>Memoria RAM:</b> DDR4 8GB 2666MHz Adata XPG Gammix D10 1x8GB Negra / AX4U266638G16-SBG</li>
                        <li><b>Tarjeta de Video:</b> Gráficos Integrados</li>
                        <li><b>Fuente de Poder:</b> Fuente de Poder Integrada</li>
                        <li><b>Gaabinete:</b> Acteck Performance AC-929011 Black Micro ATX Fuente 500W</li>
                    </ul>
                    <div class="precio-container">
                        <h3 class="precio">$6,380.00 MXN</h3>
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
                    <figure><img src="{!! asset('estilo/images/presupuesto1.jpg') !!}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about section -->
@endsection()
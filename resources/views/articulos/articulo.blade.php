@extends('template.master')
@section('contenido_central')
<!-- about section -->
<!-- products -->
<div class="products">
    <div class="contenedor_d"> 
        <div class="columnas">
            <div class="izquierda">
                 @include('articulos\menu_lateral')
            </div>

            <div class="centro">
                <div class="product_images">
                    <div class="product_box">
                        <figure><img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#"></figure>
                    </div>

                    <div class="imagenes_c">
                        <div class="item" data-slide="0">
                            <img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#" width="85">
                        </div>
                        <div class="item" data-slide="1">
                            <img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#" width="85">
                        </div>
                        <div class="item" data-slide="2">
                            <img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#" width="85">
                        </div>
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">Monitor Gamer HP 25x LED 24.5''/ Full HD / Widescreen / FreeSync / HDMI / Negro </h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Diagonal de la pantalla: 62,2 cm (24.5")</li>
                            <li>Resolución: 1920 x 1080 Pixeles (Full HD)</li>
                            <li>FreeSync: Si</li>
                            <li>Tiempo de respuesta: 1 ms</li>
                            <li>Velocidad de actualización: 144 Hz</li>
                            <li>Cantidad de puertos HDMI: 1</li>
                            <li>Altavoces incorporados: No</li>
                        </ul>
                    </div>
                    <div class="precio-container">
                        <h3 class="precio">$6,149.00</h3>
                        <button class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>
                            Agregar al carrito
                        </button>
                    </div>
                    <p>Las existencias pueden variar sin previo aviso</p>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- end about section -->
@endsection()
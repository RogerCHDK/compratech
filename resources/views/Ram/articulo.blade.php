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
                    <h2 class="nombre">{!! $ram->producto->nombre !!}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {!! $ram->producto->marca !!}</li>
                            <li>Tipo: {!! $ram->tipo_memoria !!}</li>
                            <li>Memoria interna: {!! $ram->memoria_interna !!} GB</li>
                            <li>Velocidad: {!! $ram->velocidad !!}</li>
                            <li>Latencia: {!! $ram->latencia !!}</li>
                            <li>Descripción: {!! $ram->producto->descripcion !!}</li>
                        </ul>
                    </div>
                    <div class="precio-container">
                        <h3 class="precio">$ {!! $ram->producto->precio !!}</h3>
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
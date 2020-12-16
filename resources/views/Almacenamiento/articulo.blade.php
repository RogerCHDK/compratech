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
                    <h2 class="nombre">{!! $almacenamiento->producto->nombre !!}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {!! $almacenamiento->producto->marca !!}</li>
                            <li>Interface: {!! $almacenamiento->interface !!}</li>
                            <li>Capacidad: {!! $almacenamiento->capacidad !!} GB</li>
                            <li>Velocidad de rotación: {!! $almacenamiento->velocidad_rotacion !!}</li>
                            <li>Tipo de almacenamiento: {!! $almacenamiento->tipo_almacenamiento !!}</li>
                            <li>Descripción: {!! $almacenamiento->producto->descripcion !!}</li>
                        </ul>
                    </div>
                    <div class="precio-container">
                        <h3 class="precio">$ {!! $almacenamiento->producto->precio !!}</h3>
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
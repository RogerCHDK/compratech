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
                    @foreach($gabinete->producto->fotos as $foto)
                        <div class="item" data-slide="0">
                            <img src="{{ asset('../storage/fotos') }}/{!! $foto->ruta !!}" alt="#" width="85">
                        </div>
                    @endforeach
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{!! $gabinete->producto->nombre !!}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {!! $gabinete->producto->marca !!}</li>
                            <li>Factor forma: {!! $gabinete->factor_forma !!}</li>
                            <li>Puertos USB: {!! $gabinete->puertos_usb !!}</li>
                            <li>Tarjeta de madre soportada: {!! $gabinete->tarjeta_madre_soportada !!}</li>
                            <li>Descripción: {!! $gabinete->producto->descripcion !!}</li>
                        </ul>
                        
                    </div>
                    <div class="precio-container">
                        <h3 class="precio">$ {!! $gabinete->producto->precio !!}</h3>
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
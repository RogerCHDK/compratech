@extends('template.master')
@section('contenido_central')
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
                        <figure><img src="{{route('foto.imagen',$producto->fotos->first()->ruta)}}" alt="#"></figure>
                    </div>
                    <div class="imagenes_c">
                    @foreach($producto->fotos as $foto)
                        <div class="item" data-slide="0">
                            <img src="{{route('foto.imagen',$foto->ruta)}}" alt="#" width="85">
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{!! $producto->nombre !!}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {!! $producto->marca !!}</li>
                            <li>Descripción: {!! $producto->descripcion !!}</li>
                        </ul>
                    </div>
                    <form action="{{ route('agregar.carro',$producto->id) }}" method="GET">  
                    <div class="precio-container">
                        <h3 class="precio">${{$producto->precio}}</h3>
                        <button class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>
                            Agregar al carrito
                        </button>
                    </div>
                    </form>
                    <p>Las existencias pueden variar sin previo aviso</p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- end about section -->
@endsection()
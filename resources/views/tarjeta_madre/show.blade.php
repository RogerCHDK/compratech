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
                    <figure><img src="{{route('madre.imagen',$tarjeta->producto->fotos->first()->ruta)}}" alt="#" /></figure>
                    </div>

                    <div class="imagenes_c">
                    @foreach($tarjeta->producto->fotos as $imagen)
                        <div class="item" data-slide="0">
                        <img src="{{route('madre.imagen',$imagen->ruta)}}" alt="#"  width="85"/>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{{$tarjeta->producto->descripcion}}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {{$tarjeta->producto->marca}}</li>
                            <li>Nombre: {{$tarjeta->producto->nombre}}</li>
                            <li>Familia del Procesador: {{$tarjeta->familia_procesador}}</li>
                            <li>Circuito integrado de tarjeta madre: {{$tarjeta->circuito_integrado}}</li>
                            <li>Socket de procesador: {{$tarjeta->socket_procesador}}</li>
                            <li>Memoria interna: {{$tarjeta->memoria_interna}}</li>
                            <li>Tipo de memoria:  {{$tarjeta->tipo_memoria}}</li>
                        </ul>
                    </div>
                    <div class="precio-container">
                        <h3 class="precio">${{$tarjeta->producto->precio}}</h3>
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
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
                        <figure><img src="{{route('video.imagen',$tarjeta->producto->fotos->first()->ruta)}}" alt="#"></figure>
                    </div>

                    <div class="imagenes_c">
                    @foreach($tarjeta->producto->fotos as $imagen)
                        <div class="item" data-slide="0">
                        <img src="{{route('video.imagen',$imagen->ruta)}}" alt="#"  width="85"/>
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
                            <li>Gráficos discretos memoria del adaptador: {{$tarjeta->memoria_adaptador}}</li>
                            <li>Ancho de datos: {{$tarjeta->ancho_datos}}</li>
                            <li>Frecuencia Boost: {{$tarjeta->frecuencia}}</li>
                            <li>Tipo de interfaz: {{$tarjeta->tipo_interfaz}}</li>
                        </ul>
                    </div>
                    <form action="{{ route('agregar.carro',$tarjeta->producto_id) }}" method="GET">  
                    <div class="precio-container">
                        <h3 class="precio">${{$tarjeta->producto->precio}}</h3>
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
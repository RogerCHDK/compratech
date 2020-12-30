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
                    <figure><img src="{{route('procesador.imagen',$procesador->producto->fotos->first()->ruta)}}" alt="#" /></figure>
                    </div> 

                    <div class="imagenes_c">
                    @foreach($procesador->producto->fotos as $imagen) 
                        <div class="item" data-slide="0">
                        <img src="{{route('procesador.imagen',$imagen->ruta)}}" alt="#"  width="85"/>
                        </div>
                        @endforeach 
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{{$procesador->producto->descripcion}}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {{$procesador->producto->marca}}</li>
                            <li>Nombre: {{$procesador->producto->nombre}}</li>
                            <li>Familia: {{$procesador->familia}}</li>
                            <li>Modelo: {{$procesador->modelo}}</li>
                            <li>Socket: {{$procesador->socket}}</li>
                            <li>Frecuencia: {{$procesador->frecuencia}}</li>
                            <li>Número de Nucleos:  {{$procesador->numero_nucleos}}</li>
                        </ul>
                    </div>
                    <form action="{{ route('agregar.carro',$procesador->producto_id) }}" method="GET">  
                    <div class="precio-container">
                        <h3 class="precio">${{$procesador->producto->precio}}</h3>
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
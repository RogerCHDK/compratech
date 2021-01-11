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
                    <figure><img src="{{route('fuente.imagen',$fuentes->producto->fotos->first()->ruta)}}" alt="#" /></figure>
                    </div>

                    <div class="imagenes_c">
                    @foreach($fuentes->producto->fotos as $imagen)
                        <div class="item" data-slide="0">
                        <img src="{{route('fuente.imagen',$imagen->ruta)}}" alt="#"  width="85"/>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{{$fuentes->producto->descripcion}}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {{$fuentes->producto->marca}}</li>
                            <li>Nombre: {{$fuentes->producto->nombre}}</li>
                            <li>Factor forma: {{$fuentes->factor_forma}}</li>
                            <li>Alimentador energia: {{$fuentes->alimentador_energia}}</li>
                            <li>Certificacion: {{$fuentes->certificacion}}</li>
                            <li>Potencia: {{$fuentes->potencia}}</li>
                            <li>Diametro:  {{$fuentes->diametro}}</li>
                            <li>Número conectores: {{$fuentes->numero_conectores}}</li>
                        </ul>
                    </div>
                    <form action="{{ route('agregar.carro',$fuentes->producto_id) }}" method="GET">  
                    <div class="precio-container">
                        <h3 class="precio">${{$fuentes->producto->precio}}</h3>
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
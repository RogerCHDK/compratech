@extends('template.master')
@section('contenido_central')
<!-- shopping car -->

<div class="shopping">
    <div class="contenedor_c">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Tu carrito de Compras</h2>
                </div>
            </div>
        </div> 
        <?php $valor = 0.0 ?>
        <?php $aux = "" ?>
        @if(session('cart'))
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach(session('cart') as $id => $detalle)
                        <tr>
                        <?php $valor += $detalle['precio'] * $detalle['cantidad'] ?>
                        
                        @if($detalle['categoria'] == 'tarjeta de video')
                        <td><img src="{{route('video.imagen',$detalle['foto'])}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.video',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'procesador')
                        <td><img src="{{route('procesador.imagen',$detalle['foto'])}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.procesador',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'tarjeta madre')
                        <td><img src="{{route('madre.imagen',$detalle['foto'])}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.madre',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'almacenamiento')
                        <td><img src="{{ asset('../storage/fotos') }}/{{$detalle['foto']}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.almacenamiento',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'ram')
                        <td><img src="{{ asset('../storage/fotos') }}/{{$detalle['foto']}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.ram',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'fuente de poder')
                        <td><img src="{{route('fuente.imagen',$detalle['foto'])}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.fuente',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @elseif ($detalle['categoria'] == 'gabinete')
                        <td><img src="{{ asset('../storage/fotos') }}/{{$detalle['foto']}}" alt="#"  width="85"/></td>
                        <td><a href="{{route('filtro.gabinete',$detalle['id']) }}">{{$detalle['nombre']}}</a></td>
                        @endif 
                        
                            <td>{{$detalle['descripcion']}}</td>
                            <td>{{$detalle['precio']}}</td>
                            <td>{{$detalle['cantidad']}}</td> 
                            </tr>
                            @endforeach
                        
                    </tbody>
                </table>

                <table align="right">
                <th>
                    <div class="badge badge-primary text-wrap" style="width: 10rem;">
                    <p>Valor: ${{$valor}}</p>
                    <p>Costo envio: $99.0</p>
                    <p>Total: ${{$valor + 99}}</p>
                    </div>
                </th> 
             </table>

            </div>
        </div>
        <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i><a href="{{ route('limpiar.carro') }}"> Limpiar carro</a></h4>
        @endif
    <a href="{{ route('usuario.direccion') }}" >Ir al siguiente paso</a>
    </div>
</div>

<!-- end shooping-car -->
@endsection()
@extends('template.master')
@section('contenido_central')
<!-- shopping car -->

<div class="shopping">
    <div class="contenedor">
        <div class="contenedor_c">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Tu carrito de Compras</h2>
                    </div>
                </div>
            </div>
        </div> 
        <?php $valor = 0.0 ?>
        <?php $aux = "" ?>
        @if(session('cart'))
        <div class="box-shopping">
            <div class="card">
                <div class="card-body">
                    <table id="compras" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Producto</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                    <td> 
                                        <div class="text-center">
                                            <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                    </tr>
                                    @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-right">
               <!-- <button type="button" class="btn btn-danger text-bold"><i class="fa fa-trash"></i> Vacíar Carrito</button> -->
               <div class="text-center">
                <h2>Tu compra:</h2>
                <table class="table table-striped table-bordered">
                    <body>
                        <tr>
                            <th>Subtotal</th>
                            <td id="subtotal">${{$valor}}</td>
                        </tr>
                        <tr>
                            <th>Envío</th>
                            <td>$100.00</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td id="total">${{$valor + 100}}</td>
                        </tr>
                    </tbody>
                </table>
                <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i><a href="{{ route('limpiar.carro') }}"> Limpiar carro</a></h4>
            </div>
                <a class="nav-link" href="{{ route('usuario.direccion') }}">
                 <button type="button" class="btn btn btn-info text-bold">Continuar con la compra</button>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
<script>

</script>

<!-- end shooping-car -->
@endsection()
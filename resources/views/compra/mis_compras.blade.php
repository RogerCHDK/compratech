@extends('template.master')
@section('contenido_central')

<div class="shopping">
    <div class="contenedor">
        <div class="contenedor_c">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Mis Compras</h2>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($compras as $compra)
       
        <div class="row">
            <div class="col-md-8">
                    <div class="card-body">
                        <table id="compras" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0.0 ?>
                                @foreach($compra->detalle as $valor)
                                <?php $total += $valor->producto->precio ?>
                                <tr>
                                @if($valor->producto->categoria->nombre == 'tarjeta de video')
                                <td><img src="{{route('video.imagen',$valor->producto->fotos->first()->ruta)}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.video',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'procesador')
                                <td><img src="{{route('procesador.imagen',$valor->producto->fotos->first()->ruta)}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.procesador',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'tarjeta madre')
                                <td><img src="{{route('madre.imagen',$valor->producto->fotos->first()->ruta)}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.madre',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'almacenamiento')
                                <td><img src="{{ asset('../storage/fotos') }}/{{$valor->producto->fotos->first()->ruta}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.almacenamiento',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'ram')
                                <td><img src="{{ asset('../storage/fotos') }}/{{$valor->producto->fotos->first()->ruta}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.ram',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'fuente de poder')
                                <td><img src="{{route('fuente.imagen',$valor->producto->fotos->first()->ruta)}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.fuente',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @elseif ($valor->producto->categoria->nombre == 'gabinete')
                                <td><img src="{{ asset('../storage/fotos') }}/{{$valor->producto->fotos->first()->ruta}}" alt="#"  width="85"/></td>
                                <td><a href="{{route('filtro.gabinete',$valor->producto->id) }}">{{$valor->producto->nombre}}</a></td>
                                @endif 
                                    
                                   
                                    <td>{{$valor->producto->descripcion}}</td>
                                    <td>{{$valor->producto->precio}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="col-md-4">
                <div class="datos_pago">
                    <h4>Envíado a la dirección: </h4> {{$usuario->estado->nombre}},  {{$usuario->municipio->nombre}},  {{$usuario->colonia}},   {{$usuario->calle}}
                    <h4>Total: </h4>${{$total}}.00
                    <h4>Destinatario: </h4> {{$usuario->nombre}} {{$usuario->ap_paterno}} {{$usuario->ap_materno}} 
                    <h4>Pagado con: </h4> Tarjeta de Débito/Crédito (VISA, MasterCard)
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
       
        @endforeach

        <!-- Se repite esta estructura para las compras
         <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                        <table id="compras" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Imagen pro aqui</td>
                                    <td>HyperX Audífonos Gamer Cloud Stinger</td>
                                    <td>HyperX Audífonos Gamer Cloud Stinger Core 7.1, Alámbrico, 2.5 Metros, 3.5mm/USB, Negro </td>
                                    <td>$1,000.00</td>
                                </tr>
                                <tr>
                                    <td>Imagen pro aqui</td>
                                    <td>Mouse Gamer Logitech Óptico G203</td>
                                    <td> LightSync, Alámbrico, USB, 8000DPI, Negro </td>
                                    <td>$500.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="col-md-4">
                <div class="datos_pago">
                    <h4>Envíado a la dirección: </h4> Av. Tecnológico s/n. Colonia Agrícola Bellavista
                        Metepec, Edo. De México, México C.P. 52149
                    <h4>Total: </h4> $1,600.00
                    <h4>Envíado a: </h4> Carols 
                    <h4>Pagado con: </h4> Tarjeta de Débito/Crédito (VISA, MasterCard)
                </div>
            </div>
        </div>
        -->

    </div>
</div>

@endsection()
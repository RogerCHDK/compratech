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
                    <h4>Destinatario: </h4> Carols 
                    <h4>Pagado con: </h4> Tarjeta de Débito/Crédito (VISA, MasterCard)
                </div>
            </div>
        </div>


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
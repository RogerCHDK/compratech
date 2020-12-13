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
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Imagen pro aqui</td>
                                <td>HyperX Audífonos Gamer Cloud Stinger</td>
                                <td>HyperX Audífonos Gamer Cloud Stinger Core 7.1, Alámbrico, 2.5 Metros, 3.5mm/USB, Negro </td>
                                <td>$1,000.00</td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Imagen pro aqui</td>
                                <td>Mouse Gamer Logitech Óptico G203</td>
                                <td> LightSync, Alámbrico, USB, 8000DPI, Negro </td>
                                <td>$500.00</td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-right">
               <!-- <button type="button" class="btn btn-danger text-bold"><i class="fa fa-trash"></i> Vacíar Carrito</button> -->
                    @include('compra\tabla_carrito2')
                <a class="nav-link" href="continuar_compra1">
                 <button type="button" class="btn btn btn-info text-bold">Continuar con la compra</button>
                </a>
            </div>
        </div>
    </div>
</div>
<script>

</script>

<!-- end shooping-car -->
@endsection()
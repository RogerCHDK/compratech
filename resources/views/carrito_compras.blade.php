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

        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>61</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <button type="button">Vaciar Carrito</button>

    </div>
</div>

<!-- end shooping-car -->
@endsection()
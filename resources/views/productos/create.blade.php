@extends('template.master')
@section('contenido_central') 
	<h1>Crear Productos</h1>
	<form method="post" action="{{route('productos.store')}}">
		 {{ csrf_field() }}
		 <div class="form-group col-md-6">
		 <label for="marca">Marca:</label>
         <input id="marca" name="marca" type="text" placeholder="Marca">
           </div>

         <div class="form-group col-md-6">
		 <label for="stock">Stock:</label>
         <input id="stock" name="stock" type="number" placeholder="Stock">
          </div>

          <div class="form-group col-md-6">
		 <label for="precio">Precio:</label>
         <input id="precio" name="precio" type="number" placeholder="Stock">
          </div>

           <div class="form-group col-md-6">
		 <label for="descripcion">Descripcion:</label>
         <input id="descripcion" name="descripcion" type="text" placeholder="Descripcion">
           </div>

        <div class="form-group col-md-6">
		 <label for="tipo_producto">Tipo Producto:</label>
         <input id="tipo_producto" name="tipo_producto" type="text" placeholder="Tipo Producto">
           </div>
           <input id="status" name="status" type="hidden" value="1">

            <input type="submit" class="btn btn-primary text-uppercase" style="margin-right: 200px" name="enviar" value="Enviar" >

	</form>
@endsection
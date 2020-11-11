@extends('template.master')
@section('contenido_central') 
	<h1>Crear Ram</h1>
<form method="post" action="{{route('ram.store')}}">
		 {{ csrf_field() }}
		 <div class="form-group col-md-6">
		 <label for="tipo_memoria">Tipo Memoria:</label>
         <input id="tipo_memoria" name="tipo_memoria" type="text" placeholder="Tipo Memoria">
           </div>

         <div class="form-group col-md-6">
		 <label for="memoria_interna">Memoria interna:</label>
         <input id="memoria_interna" name="memoria_interna" type="number" placeholder="Memoria interna">
          </div>

          <div class="form-group col-md-6">
		 <label for="velocidad">Velocidad:</label>
         <input id="velocidad" name="velocidad" type="number" placeholder="Velocidad">
          </div>

           <div class="form-group col-md-6">
		 <label for="latencia">Latencia:</label>
         <input id="latencia" name="latencia" type="number" placeholder="Latencia">
           </div>

            <input id="status" name="status" type="hidden" value="1">
           <input id="producto_id" name="producto_id" type="hidden" value="1">

            <input type="submit" class="btn btn-primary text-uppercase" style="margin-right: 200px" name="enviar" value="Enviar" >

	</form>
@endsection
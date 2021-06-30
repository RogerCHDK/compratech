@extends('template.master')
@section('contenido_central')
<!-- componentes -->
<div class="products">
   <div class="contenedor_c">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Componentes</h2>
            </div>
         </div>
      </div>

      <div class="row" style="margin-top: -100px;">

         <div class="column left">
            @include('articulos\menu_lateral')
         </div>

         <div class="column right"> 
            @include('Productos_cat\articulos')
            <div class="text-center">
               <div class="btn-group">
                  <a class="btn btn-default" href="#">Anterior</a>
                  <a class="btn btn-default active" href="#">1</a>
                  <a class="btn btn-default" href="#">2</a>
                  <a class="btn btn-default" href="#">3</a>
                  <a class="btn btn-default" href="#">Siguiente</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- end componentes section -->
@endsection()
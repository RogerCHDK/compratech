@extends('template.master')
@section('contenido_central')
<!-- about section -->
<!-- products -->
<div class="products">
   <div class="contenedor_c">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Accesorios para tu PC</h2>
            </div>
         </div>
      </div>

      <div class="row">

         <div class="column left">
            <nav class="navbar navbar-light bg-lignt">
               <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsingN">
                  <span class="navbar-toggler-icon my-toggler"></span>
                  <p class="navbar-brand">&nbsp;&nbsp;Categorias</p>
               </button>
               <div class="navbar-collapse collapse" id="collapsingN">
                  <ul class="navbar-nav mx-auto">
                     <li class="nav-tabs">
                        <a class="nav-link" href="#">Ver Todo</a>
                     </li>
                     <li class="nav-tabs">
                        <a class="nav-link" href="#">Teclados</a>
                     </li>
                     <li class="nav-tabs">
                        <a class="nav-link" href="#">Mouse</a>
                     </li>
                     <li class="nav-tabs">
                        <a class="nav-link" href="#">Monitores</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>

         <div class="column right">
            @include('template\articulos')

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

<!-- end about section -->
@endsection()
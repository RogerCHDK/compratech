@extends('template.master')
@section('contenido_central')

<!-- presupuestos section -->
    <div class="laptop">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                  <h2>Presupuestos</h2>
                  <br>
                     <p>Dinos lo que neceitas y seleccionaremos una PC a tu medida.</p>
                     <a class="read_more" href="#">Generar</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="laptop_box">
                     <figure><img src="{!! asset('estilo/images/pc.png') !!}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
<!-- end presupuestos  section -->
@endsection()
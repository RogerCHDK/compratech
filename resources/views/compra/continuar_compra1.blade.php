@extends('compra.master_compra')
@section('contenido_central')
   <!-- CONTINUAR COMPRA INICIO -->
   <div class="shopping">
      <div class="contenedor">
         <div class="contenedor_c">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Datos de Domicilo</h2>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="domicilo col-md-8">
               <div class="col-md-10">
                  <form id="peticion" class="compra_formulario">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Nombre y Apellidos" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                           <input class="datos" placeholder="Código Postal" type="type" name="Postal">
                        </div>
                        <div class="form-row col-md-12">
                           <div class="col">
                              <input class="datos" placeholder="Estado" type="type" name="Name">
                           </div>
                           <div class="col">
                              <input class="datos" placeholder="Delegación / Municipio" type="type" name="Name">
                           </div>
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Colonia" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Calle" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="No. Interior" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="No. Exterior" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Entre Calle" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Y Calle" type="type" name="Name">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Teléfono de Contacto" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                        <a class="nav-link" href="continuar_compra2">
                           <button type="button" class="confirmo_btn">Continuar</button>
                        </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>

            <div class="col-md-4">
                @include('compra\tabla_carrito2')
            </div>
         </div>

         
      </div>
   </div>
   <!-- CONTINUAR COMPRA FINAL -->
   @endsection()
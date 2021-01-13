@extends('compra.master_compra')
<script>
   function llenar_municipios(estado_id) { 
     
     $("#municipio_id").empty();
     var asset = '{{ asset('') }}'
     var ruta = asset + 'combo_municipios_x_entidad/' + estado_id;
     $.ajax({
       type: 'GET',
       url: ruta, 
       success: function(data) {
         var municipios = data;
         for (var i = 0; i < municipios.length; i++) {
           $('#municipio_id').append('<option value="' + municipios[i].id + '">' + municipios[i].nombre + '</option>');
         }
       },
       error: function(error) {
         console.log(error);
         alert(JSON.stringify(error));
         $('#mjs').html("ERROR");
       }
     })
   }
 </script>
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
                           <input class="datos" placeholder="Nombre" type="type" name="Name" value="{{$usuario->nombre}} {{$usuario->ap_paterno}} {{$usuario->ap_materno}}" >
                        </div>
                        <div class="col-md-12">
                           <input class="datos" placeholder="Código Postal" type="type" name="Postal" value="{{$usuario->codigo_postal}}">
                        </div>
                        <div class="col-md-12">
                               <select id="estado_id" class="contactus" placeholder="Seleccionar" , style="color: rgb(0,0,0);" name="estado_id" onchange="llenar_municipios(this.value)">
                               <option >Seleccionar</option>
                                   @foreach($estados as $estado) 
                                       <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="col-md-12">
                               <select id="municipio_id" class="contactus" placeholder="Seleccionar" , style="color: rgb(0,0,0);" name="municipio_id">
                                   
                               </select>
                           </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Colonia" type="type" name="Name" value="{{$usuario->colonia}}">
                        </div>
                        <div class="col-md-12 ">
                           <input class="datos" placeholder="Calle" type="type" name="Name"  value="{{$usuario->calle}}">
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
                           <input class="datos" placeholder="Teléfono de Contacto" type="type" name="Name" value="{{$usuario->telefono}}">
                        </div>
                        <div class="col-md-12">
                        <a class="nav-link" href="{{route('usuario.tarjeta')}}">
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
@extends('template.master')
@section('contenido_central')
   <!-- about section -->
   <div class="about">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>CompraTech-MX</h2>
                  <p>CompraTech-MX surge para atender las crecientes necesidades mostradas por el mercado de consumidores de electronicos y computo con la idea de satisfacerlas de una forma eficaz, ágil y con precios accesibles.</p>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="{!! asset('estilo/images/compratechuwu.jpg') !!}" alt="#"/></figure>
               </div>
            </div>
         </div>
         <div>
            <div>
               <div class="titlepage">
                  <h2>Objetivo general</h2>
                  <p>Nuestro objetivo general es satisfacer de manera eficaz las necesidades del mercado, buscando la mejora continua en los servicios de la empresa.</p>
               </div>
               <div class="objetivos">
                  <div class="titlepage">
                     <h2 class="text-center">Misión</h2>
                     <p class="text-center">Ser el aliado estratégico de nuestros clientes, guiándolos a una compra inteligente.</p>
                  </div>
                  <div class="titlepage">
                     <h2 class="text-center">Visión</h2>
                     <p class="text-center">Ser el mejor proveedor de tecnología y servicio online para un mercado en constante cambio.</p>
                  </div>
               </div>
               <div class="titlepage">
                  <h2 class="text-center">Nuestros Valores</h2>
                  <br>
                     <ul>
                        <li><b>Servicio al cliente: </b> Consideramos de vital importancia ofrecer excelencia en el servicio, proporcionado a nuestros clientes “lo que el cliente necesita, en donde lo necesita y cuando lo necesita”.</li>
                        <li><b>Integridad: </b>Estamos expresamente comprometidos a que todas nuestras transacciones de negocios se realicen con integridad, honestidad y siguiendo normas éticas de conducta.</li>
                        <li><b>Responsabilidad: </b>Estamos comprometidos en ser un socio de negocios que siempre cumpla con lo prometido.</li>
                     </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about section -->
   @endsection()
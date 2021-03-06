<!-- products -->
<div class="products">
   <div class="contenedor">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Nuestros Productos</h2>
            </div>
         </div>
      </div>
   </div>   

   <div class="contenedor">
      <div class="row">
         <div class="col-md-12">
            <div class="our_products">
               <div class="row">
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="{{route('monitores')}}">
                           <figure><img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#"></figure>
                        </a>
                        <a class="nav-link" href="{{route('monitores')}}">
                           <h3>Monitores</h3>
                        </a> 
                     </div>
                  </div>
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="{{route('productos_get')}}">
                           <figure><img src="{!! asset('estilo/images/perifericos.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="{{route('productos_get')}}">
                           <h3>Accesorios</h3>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="{{route('tarjeta_video.index')}}">
                           <figure><img src="{!! asset('estilo/images/tarjeta_video.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="{{route('tarjeta_video.index')}}">
                           <h3>Tarjetas de Video</h3>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="{{ route('procesadores.index') }}">
                           <figure><img src="{!! asset('estilo/images/proce.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="{{ route('procesadores.index') }}">
                           <h3>Procesadores</h3>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="{{route('tarjeta_madre.index')}}">
                           <figure><img src="{!! asset('estilo/images/mothers.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="{{route('tarjeta_madre.index')}}">
                           <h3>Motherboards</h3> 
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 margin_bottom1">
                     <div class="product_box">
                        <a href="almacenamientos">
                           <figure><img src="{!! asset('estilo/images/almacen.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="almacenamientos">
                           <h3>Almacenamiento</h3>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="product_box">
                        <a href="rams">
                           <figure><img src="{!! asset('estilo/images/memram.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="rams">
                           <h3>Memoria RAM</h3>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="product_box">
                        <a href="{{ route('fuente_poder.index') }}">
                           <figure><img src="{!! asset('estilo/images/fuentep.jpg') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="{{ route('fuente_poder.index') }}">
                           <h3>Fuentes de Poder</h3>
                        </a> 
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="product_box">
                        <a href="gabinetes">
                           <figure><img src="{!! asset('estilo/images/gabo.png') !!}" alt="#" /></figure>
                        </a>
                        <a class="nav-link" href="gabinetes">
                           <h3>Gabinetes</h3>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
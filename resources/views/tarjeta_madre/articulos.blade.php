 <!-- article -->
<div class="our_products">
   <div class="row">

   @foreach($tarjetas as $tarjeta) 
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{{ route('tarjeta_madre.show',$tarjeta->id) }}"><figure><img src="{{route('madre.imagen',$tarjeta->producto->fotos->first()->ruta)}}" alt="#" /></figure></a>
            <a href="{{ route('tarjeta_madre.show',$tarjeta->id) }}"> <p class="articulo">{{$tarjeta->producto->descripcion}}</p> </a>
            <p class="precio">${{$tarjeta->producto->precio}}</p>
            <a href="{{ route('agregar.carro',$tarjeta->producto_id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
         </div>
      </div>
      @endforeach 
      
   </div>
</div>
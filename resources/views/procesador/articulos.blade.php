<!-- article -->
<div class="our_products">
   <div class="row">

   @foreach($procesadores as $procesador) 
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{{ route('procesadores.show',$procesador->id) }}"><figure><img src="{{route('procesador.imagen',$procesador->producto->fotos->first()->ruta)}}" alt="#" /></figure></a>
            <a href="{{ route('procesadores.show',$procesador->id) }}"> <p class="articulo">{{$procesador->producto->descripcion}}</p> </a>
            <p class="precio">${{$procesador->producto->precio}}</p>
            <a href="{{ route('agregar.carro',$procesador->producto_id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
         </div>
      </div>
      @endforeach
       
   </div> 
</div>
<!-- article -->
<div class="our_products">
   <div class="row">
   
   @foreach($almacenamientos as $almacenamiento)
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{!! 'almacenamientos/'.$almacenamiento->id !!}"><figure><img src="{{route('foto.imagen',$almacenamiento->producto->fotos->first()->ruta)}}" alt="#" /></figure></a>
            <a href="{!! 'almacenamientos/'.$almacenamiento->id !!}"> <p class="articulo">{!! $almacenamiento->producto->nombre !!}</p> </a>
            <p class="precio">$ {!! $almacenamiento->producto->precio !!}</p>
            
            
            <a href="{{ route('agregar.carro',$almacenamiento->producto_id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
         </div>
      </div>
   @endforeach
   </div>
</div>
<!-- article -->
<div class="our_products">
   <div class="row">
   
   @foreach($almacenamientos as $almacenamiento)
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{!! 'almacenamientos/'.$almacenamiento->id !!}"><figure><img src="{{ asset('../storage/fotos') }}/{!! $almacenamiento->producto->fotos->first()->ruta !!}" alt="#" /></figure></a>
            <a href="{!! 'almacenamientos/'.$almacenamiento->id !!}"> <p class="articulo">{!! $almacenamiento->producto->nombre !!}</p> </a>
            <p class="precio">$ {!! $almacenamiento->producto->precio !!}</p>
            <p class="precio">$ {!! $almacenamiento->producto->fotos->first()->ruta !!}</p>
            <p class="precio">$ {!! $almacenamiento->producto->fotos !!}</p>
            @foreach($almacenamiento->producto->fotos as $foto)
            <p class="precio">$ {!! $foto->ruta !!}</p>
            @endforeach
            
            <a href="{{ route('agregar.carro',$almacenamiento->producto_id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
         </div>
      </div>
   @endforeach
   </div>
</div>
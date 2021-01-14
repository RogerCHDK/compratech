<!-- article -->
<div class="our_products">
   <div class="row">
   
   @foreach($gabinetes as $gabinete)
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{!! 'gabinetes/'.$gabinete->id !!}"><figure><img src="{{route('foto.imagen',$gabinete->producto->fotos->first()->ruta)}}" alt="#" /></figure></a>
            <a href="{!! 'gabinetes/'.$gabinete->id !!}"> <p class="articulo">{!! $gabinete->producto->nombre !!}</p> </a>
            <p class="precio">$ {!! $gabinete->producto->precio !!}</p>
            <a href="{{ route('agregar.carro',$gabinete->producto_id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
         </div>
      </div>
   @endforeach
   </div>
</div>
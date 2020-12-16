<!-- article -->
<div class="our_products">
   <div class="row">
   
   @foreach($rams as $ram)
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{!! 'rams/'.$ram->id !!}"><figure><img src="{{ asset('../storage/fotos') }}/{!! $ram->producto->fotos->first()->ruta !!}" alt="#" /></figure></a>
            <a href="{!! 'rams/'.$ram->id !!}"> <p class="articulo">{!! $ram->producto->nombre !!}</p> </a>
            <p class="precio">$ {!! $ram->producto->precio !!}</p>
            <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i> Agregar</h4>
         </div>
      </div>
   @endforeach
   </div>
</div>
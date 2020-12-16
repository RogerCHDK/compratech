<!-- article -->
<div class="our_products">
   <div class="row">

   @foreach($fuentes as $fuente) 
      <div class="col-md-4 margin_bottom1">
         <div class="product_box">
            <a href="{{ route('fuente_poder.show',$fuente->id) }}"><figure><img src="{!! asset('estilo/images/monitores.jpg') !!}" alt="#" /></figure></a>
            <a href="{{ route('fuente_poder.show',$fuente->id) }}"> <p class="articulo">{{$fuente->producto->descripcion}}</p> </a>
            <p class="precio">${{$fuente->producto->precio}}</p>
            <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i> Agregar</h4>
         </div>
      </div>
      @endforeach
      
   </div>
</div>
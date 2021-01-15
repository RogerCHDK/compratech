<!-- article -->
<div class="our_products">
   <div class="row">

   @foreach($productos as $producto) 
      <div class="col-md-4 margin_bottom1">
      <div class="product_box">
            <a href="{!! 'productos/'.$producto->id !!}"><figure><img src="{{route('foto.imagen',$producto->fotos->first()->ruta)}}" alt="#" /></figure></a>
            <a href="{!! 'productos/'.$producto->id !!}"> <p class="articulo">{{$producto->descripcion}}</p> </a>
            <p class="precio">${{$producto->precio}}</p>
            <a href="{{ route('agregar.carro',$producto->id) }}"> <h4><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Agregar</h4></a>
      </div>
      </div>
   @endforeach
      
   </div>
</div>
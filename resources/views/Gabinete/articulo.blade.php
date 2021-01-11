@extends('template.master')
@section('contenido_central')
<!-- modal -->
<div class="modal fade" id="modal_img" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-em" role="document">
        <div class="modal-content">
            <img src="" alt="#" id="img01">
        </div>
    </div>
</div>
<!-- end modal -->
<!-- products -->
<div class="products">
    <div class="contenedor_d">
        <div class="columnas">
            <div class="izquierda">
                @include('articulos\menu_lateral')
            </div>

            <div class="centro">
                <div class="product_images">
                    <div class="product_box">
                        <figure><img id="myImg" src="{{ asset('../storage/fotos') }}/{!! $gabinete->producto->fotos->first()->ruta !!}" alt="#"></figure>
                    </div>

                    <div class="imagenes_c" id="imagenes">
                        @foreach($gabinete->producto->fotos as $foto)
                        <div class="item" id="items">
                            <img id="myImg2" class="asdf" src="{{ asset('../storage/fotos') }}/{!! $foto->ruta !!}" alt="#" width="85">
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="derecha">
                <div class="producto-info">
                    <h2 class="nombre">{!! $gabinete->producto->nombre !!}</h2>
                    <div>
                        <h3 class="caracteristicas">Características:</h3>
                        <ul class="lista_car">
                            <li>Marca: {!! $gabinete->producto->marca !!}</li>
                            <li>Factor forma: {!! $gabinete->factor_forma !!}</li>
                            <li>Puertos USB: {!! $gabinete->puertos_usb !!}</li>
                            <li>Tarjeta de madre soportada: {!! $gabinete->tarjeta_madre_soportada !!}</li>
                            <li>Descripción: {!! $gabinete->producto->descripcion !!}</li>
                        </ul>

                    </div>
                    <form action="{{ route('agregar.carro',$gabinete->producto_id) }}" method="GET">  
                    <div class="precio-container">
                        <h3 class="precio">${{$gabinete->producto->precio}}</h3>
                        <button class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i>
                            Agregar al carrito
                        </button>
                    </div>
                    </form>
                    <p>Las existencias pueden variar sin previo aviso</p>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    // Get the image and insert it inside the modal
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");

    img.onclick = function() {
        $("#modal_img").modal("show");
        modalImg.src = this.src;
    }

    var img2 = document.getElementsByClassName("asdf");
    for (var i = 0; i < img2.length; i++) {
        img2[i].onclick = function() {
            $("#modal_img").modal("show");
            modalImg.src = this.src;
        }
    }
</script>

<!-- end about section -->
@endsection()
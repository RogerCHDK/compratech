@extends('compra.master_compra')
@section('contenido_central')
<!-- CONTINUAR COMPRA INICIO -->
<!-- Modal para edicion de datos -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-em" role="document">
            <div class="modal-content">
                <div class="modal-header" id="verify_card">
                </div>
                    <div class="text-center">
                        <img src="{!! asset('estilo/images/check.png') !!}" alt="#" height="50px" width="50px">
                         <h5>Empezaremos a trabajar en tu pedido, puedes ver los datos de tu pedido en tus compras.</h5>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Ir a Compras</button>
                </div>
            
            </div>
        </div>
    </div>
<!-- Fin del modal -->

<div class="shopping">
    <div class="contenedor">
        <div class="contenedor_c">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Datos de Pago</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="domicilo col-md-8">
                <div class="text_center col-md-11">
                    <div class="text_img2">
                        <figure><img src="{!! asset('estilo/images/tarjeta-08.png') !!}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-10">
                    <form id="peticion" class="compra_formulario">
                        <div class="row">
                        <label><span class="hidden-xs">Datos de la Tarjeta</span> </label>
                            <div class="col-md-12 ">
                                <input class="datos" placeholder="Nombre y Apellidos" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="datos" placeholder="Número de Tarjeta" type="number_format" name="Postal" minlength="16" maxlength="16" pattern="[0-9]+">
                            </div>
                            
                            <label><span class="hidden-xs">Fecha de Vencimiento</span> </label>
                            <div class="form-row col-md-12">
                                <div class="col">
                                    <select class="datos custom-select mr-sm-2" id="inlineFormCustomSelect" >
                                        <option selected>AA</option>
                                        <option value="1">20</option>
                                        <option value="2">21</option>
                                        <option value="4">22</option>
                                        <option value="5">23</option>
                                        <option value="6">24</option>
                                        <option value="7">25</option>
                                        <option value="8">26</option>
                                    </select>
                                    </input>
                                </div>
                                <div class="col">
                                    <select class="datos custom-select mr-sm-2" id="inlineFormCustomSelect" >
                                        <option selected>MM</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    </input>
                                </div>
                                <div class="col">
                                    <input class="datos" placeholder="CVV" type="type" name="Name" minlength="3" maxlength="4" pattern="[0-9]+">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="confirmo_btn" onclick="validar_tarjeta()">Confirmar Compra</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                @include('compra\tabla_carrito2')
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
 function validar_tarjeta(){
    $("#modal").modal("show");
    $('#verify_card').html('<h4 class="modal-title" id="myModalLabel">Compra realizada con éxito!</h4>  <div class="loader"></div>');
    $(".loader").delay(8000).fadeOut("slow");
 }
</script>
<!-- CONTINUAR COMPRA FINAL -->

@endsection()
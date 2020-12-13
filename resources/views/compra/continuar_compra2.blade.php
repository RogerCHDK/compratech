@extends('compra.master_compra')
@section('contenido_central')
<!-- CONTINUAR COMPRA INICIO -->
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
                                <input class="datos" placeholder="Nombre y Apellidos" type="type" name="Name" >
                            </div>
                            <div class="col-md-12">
                                <input class="datos" placeholder="Número de Tarjeta" type="number_format" name="Postal" minlength="16" maxlength="16" pattern="[0-9]+">
                            </div>
                            
                            <label><span class="hidden-xs">Fecha de Vencimiento</span> </label>
                            <div class="form-row col-md-12">
                                <div class="col">
                                    <select class="datos custom-select mr-sm-2" id="inlineFormCustomSelect" >
                                        <option selected>AÑO</option>
                                        <option value="1">2020</option>
                                        <option value="2">2021</option>
                                        <option value="4">2022</option>
                                        <option value="5">2023</option>
                                        <option value="6">2024</option>
                                        <option value="7">2025</option>
                                        <option value="8">2026</option>
                                    </select>
                                    </input>
                                </div>
                                <div class="col">
                                    <select class="datos custom-select mr-sm-2" id="inlineFormCustomSelect" >
                                        <option selected>MES</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Novienbre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                    </input>
                                </div>
                                <div class="col">
                                    <input class="datos" placeholder="CVV" type="type" name="Name" minlength="3" maxlength="4" pattern="[0-9]+">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="confirmo_btn">Confirmar Compra</button>
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
<!-- CONTINUAR COMPRA FINAL -->
@endsection()
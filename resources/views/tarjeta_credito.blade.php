@extends('template.master')
@section('contenido_central')
<!--  registrto -->
<div class="contact">
    <div class="container">
        <div class="row">
        @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Tarjeta de Credito</h2>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -41px;">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="main_form" action="{{route('usuario.comprar')}}" method="GET" >
                @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <input id="nombre" class="contactus" placeholder="Nombre del titular" type="text" name="nombre">
                        </div>
                        <div class="col-md-12">
                            <input id="ap_paterno" class="contactus" placeholder="Número de tarjeta" type="text" name="ap_paterno">
                        </div>
                        
                        <div class="col-md-12">
                            <button class="send_btn" type="submit">Confirmar compra</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end registro -->
@endsection()
@extends('template.master')
@section('contenido_central')
<!--  contact -->
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Iniciar sesión</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="main_form" action="{{route('login_post')}}" method="POST" >
                @csrf
                    <div class="row">
                    <div class="col-md-12">
                            <input id="email" class="contactus" placeholder="Correo" type="email" name="email">
                        </div>
                        <div class="col-md-12">
                        <input id="password" class="contactus" placeholder="Contraseña" type="text" name="password">
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn" type="submit">Continuar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
@endsection()
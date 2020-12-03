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
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Correo electronico" type="email" name="Email">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Contraseña" type="password" name="Password">
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Continuar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
@endsection()
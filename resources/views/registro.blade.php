@extends('template.master')
@section('contenido_central')
<!--  registrto -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Registrate Ahora</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Nombre" type="type" name="Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Apellidos" type="type" name="Last Name">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Correo" type="email" name="Email">
                        </div>
                        <div class="col-md-12">
                        <input class="contactus" placeholder="Contraseña" type="password" name="Password">
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end registro -->
@endsection()
@extends('template.master')
<script>
  function llenar_municipios(estado_id) { 
    
    $("#municipio_id").empty();
    var asset = '{{ asset('') }}'
    var ruta = asset + 'combo_municipios_x_entidad/' + estado_id;
    $.ajax({
      type: 'GET',
      url: ruta, 
      success: function(data) {
        var municipios = data;
        for (var i = 0; i < municipios.length; i++) {
          $('#municipio_id').append('<option value="' + municipios[i].id + '">' + municipios[i].nombre + '</option>');
        }
      },
      error: function(error) {
        console.log(error);
        alert(JSON.stringify(error));
        $('#mjs').html("ERROR");
      }
    })
  }
</script>
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
                    <h2>Dirección</h2>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -41px;">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="main_form" action="{{route('usuario.tarjeta')}}" method="GET" >
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h1> Estado </h1>
                                <select id="estado_id" class="contactus" placeholder="Seleccionar" , style="color: rgb(0,0,0);" name="estado_id" onchange="llenar_municipios(this.value)">
                                <option >Seleccionar</option>
                                    @foreach($estados as $estado) 
                                        <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                            <h1> Municipio </h1>
                                <select id="municipio_id" class="contactus" placeholder="Seleccionar" , style="color: rgb(0,0,0);" name="municipio_id">
                                    
                                </select>
                            </div>
                        <div class="col-md-12">
                            <input id="colonia" class="contactus" placeholder="{{$usuario->colonia}}" type="text" name="colonia">
                        </div>
                        <div class="col-md-12">
                            <input id="calle" class="contactus" placeholder="{{$usuario->calle}}" type="text" name="calle">
                        </div>
                        <div class="col-md-12">
                            <input id="codigo_postal" class="contactus" placeholder="{{$usuario->codigo_postal}}" type="number" name="codigo_postal">
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
<!-- end registro -->
<script>
    document.ready = document.getElementById("estado_id").value = {{$usuario->estado_id}};
</script>
@endsection()
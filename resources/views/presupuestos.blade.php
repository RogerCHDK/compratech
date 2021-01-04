@extends('template.master')
@section('contenido_central')

<!-- presupuestos section -->
<div class="laptop">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="titlepage">
               <h2>Presupuestos</h2>
               <br>
               <p>Dinos lo que neceitas y seleccionaremos una PC a tu medida.</p>
               <button class="read_more" id="generar" onclick="responder()">Generar</button>
            </div>
         </div>

         <div class="col-md-6">
            <div class="laptop_box">
               <fieldset class="form-group">
                  <div class="row">
                     <div class="col-sm-10">
                        <legend class="col-form-label"><b>Tipo de Uso</b></legend>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                           <label class="form-check-label" for="gridRadios1">
                              PC Trabajo
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                           <label class="form-check-label" for="gridRadios2">
                              PC Gamming
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                           <label class="form-check-label" for="gridRadios3">
                              PC Multimedia
                           </label>
                        </div>
                     </div>
                  </div>
               </fieldset>
               <fieldset class="form-group">
                  <div class="row">
                     <div class="col-sm-10">
                        <legend class="col-form-label"><b>Tipo de Presupuesto</b></legend>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios11" value="option11" checked>
                           <label class="form-check-label" for="gridRadios11">
                              Lo más económico
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios12" value="option12">
                           <label class="form-check-label" for="gridRadios12">
                              Equilibrado
                           </label>
                        </div>
                        <div class="form-check ">
                           <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios13" value="option13">
                           <label class="form-check-label" for="gridRadios13">
                              Lo mejor de lo mejor
                           </label>
                        </div>
                     </div>
                  </div>
               </fieldset>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<script>
   function responder() {
      pag = $('input:radio[name=gridRadios2]:checked').val();
      switch (pag) {
         case 'option11':
            location.href="presupuesto1";
            break;
         case 'option12':
            location.href="presupuesto2";
            break;
         case 'option13':
            location.href="presupuesto3";
            break;
      }
   }
</script>
<!-- end presupuestos  section -->
@endsection()
@extends('template.master')
@section('contenido_central')

<section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner"> 
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Descuentos</span>
                                 <h1>Descuentos del Buen Fin</h1>
                                 <p>Hasta un 30% de descuentos en productos seleccionados, meses sin intereses y envios gratis.</p>
                                 <a href="#">Ver descuentos</a> 
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{!! asset('estilo/images/discount.png') !!}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Componentes</span>
                                 <h1>Tarjetas de Video</h1>
                                 <p>Este buen fin consigue descuentos en tarjetas de video Nvidia serie 16 GTX</p>
                                 <a href="#">Compra Ahora</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{!! asset('estilo/images/nvidia_serie16.jpg') !!}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>PC Gamming</span>
                                 <h1>Configurador de PC</h1>
                                 <p>Utiliza nuestro configurador automático para que encuentres una PC a la medida.</p>
                                 <a href="#">Probar ahora</a> <a href="contact.html">Contacto</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{!! asset('estilo/images/cgamerpc.png') !!}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>PC Gaming</span>
                                 <h1>Componentes</h1>
                                 <p>Encuentra los mejores componentes de las mejores marcas, todo lo necesario para armar tu PC gamer.</p>
                                 <a href="#">Comprar ahora </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{!! asset('estilo/images/componentes.png') !!}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Componentes</span>
                                 <h1>Nuevos AMD RYZEN</h1>
                                 <p>Compra los últimos procesadores de AMD serie 5000 a los mejores Precios</p>
                                 <a href="#">Comprar</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{!! asset('estilo/images/amd-ryzen.jpg') !!}"alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row" style="margin-top: -60px;">
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{!! asset('estilo/images/thr.png') !!}" alt="#"/></i>
                     <h3>Computadoras</h3>
                     <p>Con Compratech puedes usar nuestro configurador para ver las opciones que computadoras que tenemos para ti las cuales se adecue a tu presupuesto y necesidades. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{!! asset('estilo/images/thr2.png') !!}" alt="#"/></i>
                     <h3>Componentes</h3>
                     <p>Si lo prefieres puedes buscar los componentes que deseas en nuestra página, comparar precios, marcas y añadirlos al carrito para que así solo compres lo que necesitas.  </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{!! asset('estilo/images/thr1.png') !!}" alt="#"/></i>
                     <h3>Accesorios</h3>
                     <p>Consigue los mejores accesorios de las mejores marcas para tu setup, a los mejores precios. Teclados, Mouse, Monitores, todo lo necesario para tu setup gamer, oficina o PC. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- three_box -->
      <!-- products -->
        <div class="contenedor">
         @include('template\caja_productos') 
        </div>
      <!-- end products -->
      <!-- laptop  section -->
      <div class="laptop">
         <div class="contenedor_b">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <p>Consigue los mejores componentes en Compratech</p>
                     <h2>Descuentes Especiales</h2>
                     <a class="read_more" href="#">Ver Más</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="laptop_box">
                     <figure><img src="{!! asset('estilo/images/pc_gamer_1.jpg') !!}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop  section -->
      <!-- customer -->
      <div class="customer">
         <div class="contenedor_b">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Reseñas de Compradores</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="contenedor">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="{!! asset('estilo/images/cos.png') !!}" alt="#"/></i>
                                          <h4>Marco Antonio</h4>
                                          <p>Excelentes precios, y una buena cantidad de componentes, súper recomendado xD</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="contenedor">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="{!! asset('estilo/images/cos.png') !!}" alt="#"/></i>
                                          <h4>Miles Morales</h4>
                                          <p>Tienen productos que no encontraba en otras páginas a buenos precios, además de que cuentan con grandes descuentos! Perfectos para armarte tu PC gamer.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="contenedor">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="{!! asset('estilo/images/cos.png') !!}" alt="#"/></i>
                                          <h4>Mary Jeane</h4>
                                          <p>Los envíos son muy rápidos! No tardaron en enviarme mi monitor al otro extremo de país!</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->

@endsection()
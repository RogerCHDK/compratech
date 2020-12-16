<header>
   <!-- header inner -->
   <div class="header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo">
                        <a href="bienvenida"><img src="{!! asset('estilo/images/logo3.png') !!}" alt="#" width="156px" height="102px" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
               <nav class="navigation navbar navbar-expand-md navbar-dark ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('bienvenida') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="acercade">Acerca</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="presupuestos">Presupuestos</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="productos">Productos</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="registro">Regístrate</a>
                        </li>
                        <li class="nav-item d_none">
                           <a class="nav-link" href="carrito_compras"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item d_none">
                           <a class="nav-link" href="iniciarsesion">Iniciar Sesión</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
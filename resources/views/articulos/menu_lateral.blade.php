<nav class="navbar navbar-light bg-lignt">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsingN">
        <span class="navbar-toggler-icon my-toggler"></span>
        <p class="navbar-brand">&nbsp;&nbsp;Categorias</p>
    </button>
    <div class="navbar-collapse collapse" id="collapsingN">
        <ul class="navbar-nav mx-auto">
            <li class="nav-tabs">
                <a class="nav-link" href="#">Ver Todo</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('monitores') }}">Monitores</a>
            </li>
            
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('productos_get') }}">Accesorios</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('tarjeta_video.index') }}">Tarjetas de Video</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('procesadores.index') }}">Procesadores</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('tarjeta_madre.index') }}">Motherboards</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="almacenamientos">Almacenamiento</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="rams">Memorias RAM</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="{{ route('fuente_poder.index') }}">Fuentes de Poder</a>
            </li>
            <li class="nav-tabs">
                <a class="nav-link" href="gabinetes">Gabinetes</a>
            </li>
        </ul>
    </div>
</nav>
<header>
    <div class="logo">Patitas</div>
    <nav>
        <ul class = "_lista_nav">
            @guest
            <li class = "_nav_item">
                <a href = "{{ route('login') }}" class = "_nav_texto">Iniciar sesion</a>
             </li>
             @if (Route::has('register'))
             <li class = "_nav_item">
             <a href = "{{route('register')}}" class = "_nav_texto">Registrarse</a>
             </li>
             @endif
             @else
             <li class = "_nav_item">
                <a href = "/" class = "_nav_texto">Ver alertas</a>
             </li>
             <li class = "_nav_item">
                <a href = "/" class = "_nav_texto">Crear alerta</a>
             </li>
             <li class = "_nav_item">
                <a href = "/" class = "_nav_texto">Adoptar</a>
             </li>
             <li class = "_nav_item">
                <a href = "/" class = "_nav_texto">Nosotros</a>
             </li>
             <li class="_nav_item dropdown">
                <a id="navbarDropdown" class="_nav_texto" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </li>
                <li class="_nav_item" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item _nav_texto" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    Cerrar sesion
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
           
                
            @endguest
           
           
        </ul>
    </nav>
    <div class="_menu_toggle"><i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</header>
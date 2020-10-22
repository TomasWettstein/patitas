<header>
    <a href="/" class="logo">Patitas</a>
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
                <div class="dropdown text-center _nav_item">
                    <a class="_nav_texto dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ver alertas
                    <a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($categorias as $categoria)
                        <a class="dropdown-item _nav_texto" href="#">{{$categoria->nombre}}</a>
                        @endforeach
                    </div>
                </div>
             <li class = "_nav_item">
                <a href = "/crearAlerta" class="_nav_texto">Crear Alerta</a>
             </li>
             <li class = "_nav_item">
                <a href = "/" class = "_nav_texto">Adoptar</a>
             </li>
             <li class = "_nav_item">
                <a href = "/nosotros" class = "_nav_texto">Nosotros</a>
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
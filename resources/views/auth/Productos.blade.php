<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap y CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/producto.css')}}">
        <!-- Estilo de la letra -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
        <!-- Iconos del pie de pagina-->
        <script src="https://kit.fontawesome.com/6868c404bc.js" crossorigin="anonymous"></script>
        <!-- Icono de la pagina-->
        <link rel="icon" href="{{ asset('img/IconoPage1.png') }}">
        <title>Productos, Coca-Cola</title>
    </head>
    <body>
        <!-- Barra de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #000000;">
        <div class="container">
            <!-- logo de la empresa-->
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="https://www.coca-cola.com.co/content/dam/one/co/es/es/CC_Colombia_Lockup_Horizontal_White.png" alt="logo Coca-Cola" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                @guest <!-- Verificar si el usuario no está autenticado le aparece esto -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endif
                @else <!-- Si el usuario está autenticado le aparece esto -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}">Inicio</a>
                    </li>
                        @auth
                    <li class="nav-item">
                        <h5 class="nav-link active">{{ Auth::user()->email}}</h5>
                    </li>
                    <li class="nav-item">
                    <a id="Salir" class="nav-link active" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    </li>
                        @else
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endauth
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @endguest
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('Productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('Compra') }}">Comprar Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('servicio-cliente') }}">Servicio al cliente</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
      <!--Categoria y imagenes de los productos-->
    <main class="productos"> 
        <h2>Nuestras Marcas</h2>
        <nav class="categorias">
            <ul>
                <li><a href="#">Todas</a></li>
                <li><a href="#">Bebidas Alcohólicas</a></li>
                <li><a href="#">Bebidas Carbonatadas</a></li>
                <li><a href="#">Hidratación</a></li>
                <li><a href="#">Tea</a></li>
            </ul>
        </nav>
        <div class="galeria">
            <div class="imagen">
                <img src="{{ asset('img/Producto1.png') }}" alt="Marca 1">
            </div>
            <div class="imagen">
                <img src="{{ asset('img/Producto2.png') }}" alt="Marca 2">
            </div>
            <div class="imagen">
                <img src="{{ asset('img/Producto3.png') }}" alt="Marca 3">
            </div>
        </div>
        <div class="galeria2">
            <div class="imagen">
                <img src="{{ asset('img/Producto4.png') }}" alt="Marca 4">
            </div>
            <div class="imagen">
                <img src="{{ asset('img/Producto5.png') }}" alt="Marca 4">
            </div>
            <div class="imagen">
                <img src="{{ asset('img/Producto6.png') }}" alt="Marca 4">
            </div>
        </div>
    </main>
    <!--Pie de pagina-->
    <footer class="Pie-pagina">
        <div class="Grupo-1">
            <div class="caja">
                <figure>
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo de Coca-Cola Colombia">
                    </a>
                </figure>
            </div>
            <div class="caja">
                <h2>Sobre nosotros</h2>
                <p>En 1886, el Dr. John Pemberton sirvió la primera Coca-Cola en el mundo.</p>
                <p>Desde entonces, no hemos dejado de sorprenderte.</p>
            </div>
            <div class="caja">
                <h2>Siguenos</h2>
                <div class="Red-social">
                    <a href="https://www.facebook.com/TheCocaColaCo/" class="fa-brands fa-facebook"></a>
                    <a href="https://www.instagram.com/cocacolacol/"class="fa-brands fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCosXctaTYxN4YPIvI5Fpcrw"class="fa-brands fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="Grupo-2">
            <small>&copy; 2023 <b>The Coca-Cola Company</b> - Reservado todos los derechos.</small>
        </div>
    </footer>
        <!-- JavaScript de Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body> 
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap y CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/compra.css')}}">
        <!-- Estilo de la letra -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
        <!-- Iconos del pie de pagina-->
        <script src="https://kit.fontawesome.com/6868c404bc.js" crossorigin="anonymous"></script>
        <!-- Icono de la pagina-->
        <link rel="icon" href="{{ asset('img/IconoPage1.png') }}">
        <title>The Coca-Cola Company Colombia</title>
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
                        <a class="nav-link active" href="{ route('Compras') }}">Comprar Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('servicio-cliente') }}">Servicio al cliente</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    <!--Seccion de compras-->
    <main> 
        <h1>!Destapa la felicidad¡</h1>
        <div class="container">
            <div class="box">
                <img src="{{ asset('img/Compra1.png') }}" alt="Product 1">
                <div class="capa">
                    <p class="price" id="price1">COP 10.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('img/Compra2.png') }}" alt="Product 2">
                <div class="capa">
                    <p class="price" id="price1">COP 15.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('img/Compra3.png') }}" alt="Product 3">
                <div class="capa">
                    <p class="price" id="price1">COP 20.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <img src="{{ asset('img/Compra4.png') }}" alt="Product 4">
                <div class="capa">
                    <p class="price" id="price1">COP 16.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('img/Compra5.png') }}" alt="Product 5">
                <div class="capa">
                    <p class="price" id="price1">COP 17.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('img/Compra6.png') }}" alt="Product 6">
                <div class="capa">
                    <p class="price" id="price1">COP 22.000</p>
                    <a href="#" class="buy-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Comprar</a>
                </div>
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
    @guest <!-- Verifica si el usuario no está autenticado le aparece esto -->
    <!-- Ventana emergente para iniciar sesión para los usuarios no logeados -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Debes iniciar sesión para poder comprar un producto.</p>
                    <h1><a href="{{ route('login') }}">click aquí</a> para iniciar sesión</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @else <!-- Si el usuario está autenticado le aparece esto -->

    @endguest
        <!-- JavaScript de Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body> 
</html>
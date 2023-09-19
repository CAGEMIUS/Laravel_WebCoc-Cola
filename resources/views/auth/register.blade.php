<!doctype html>
<html lang="en">

<head>
  <title>Registro, nuevo usuario</title>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap y CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/register.css')}}">
  <!-- Bootstrap y CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/login.css')}}">
  <!-- Estilo de la letra -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline+Regular" rel="stylesheet">
  <!-- Icono de la pagina-->
  <link rel="icon" href="{{ asset('img/IconoPage1.png') }}">
</head>

<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center mb-5">
                  <a href="{{ route('welcome') }}">
                    <img src="{{ asset('img/icono1.png') }}" style="width: 185px; height: 80px" alt="logo">
                  </a>
                </div>

                <form action="{{route('register')}}" method="post">
                    @csrf
                  <p>Ingresa tu correo y contraceña</p>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nombre de usuario</label>
                    <input type="text" name="name" id="form2Example11" class="form-control"
                      placeholder="Ingresa un nombre de usuario" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Correo electrónico</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Ingresa tu correo Gmail" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraceña</label>
                    <input type="password" name="password" id="form2Example22" class="form-control" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Comfirmar contraceña</label>
                    <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="boton btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Crear cuenta</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Ya tienes una cuenta?</p>
                    <a href="{{route('login')}}" class="boton1 btn btn-outline-danger">Ingresa aquí</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
                <img src="{{ asset('img/imgRegistro.gif') }}" alt="logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
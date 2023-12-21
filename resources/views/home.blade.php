<!DOCTYPE html>
<html>
<head>
  <title>Inicio | I want that piece's Hub</title>
  <link rel="icon" type="image/pg" href="{{ asset('img/logoWTP.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
     itegrity="sha384-rbsA2VBQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">
  <style>

    body {
        background-image: url('{{ asset("img/fondo.jpg") }}');
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        margin: 0;
        padding-bottom: 100px;
    }
 
    /* ESTILOS PARA EL LOGO Y LA BARRA DE NAVEGACIÓN */
    header {
        padding: 0.5rem 20px;
        background: #8CBED6;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
 
    .logo {
        max-width: 100px;
    }

    .nav-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-left: 5rem;
     }

    nav {
      text-align: right;
      width:fit-content;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    nav ul li {
      display: inline-block;
      border-right: 1px solid;
    }

    nav ul li:last-child {
      border-right: none;
    }


    nav ul li a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    nav ul li a:hover {
      background-color: #ddd;
    }

    /* ESTILOS PARA EL MENU DESPLEGABLE */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .carousel {
        max-height: 32rem;
        overflow:hidden;
    }

    /* FOOTER */
    .footer {
        background-color: #0f2f76;
        padding: 10px 2rem;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 2;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .text-left {
        flex-grow: 1;
    }

    .social-media-container {
        display: flex;
        align-items: center;
    }

    .footer-col {
        display: flex;
        flex-direction: row;
        gap: 3rem;
    }

    .slogan-container {
        background-color: transparent;
        padding: 20px;
        text-align: center;
        margin-top: 2%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slogan-title {
        font-size: 25px;
        margin: 0;
        line-height: 1.2;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .font-style {
        font-family: 'Times New Roman', serif;
        font-weight: bold;
    }

    .slogan-title em {
        font-style: italic;
    }
    .form_container{
        background-color: #2271b3;
        padding: 20px;
        text-align: center;
        margin-top: 2%;
        justify-content: center;
        align-items: center;
       
    }
    .vendido{
        padding-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 90px;
    }
    .bg-custom {
        background-color: #f8bade; /* Cambia el color de fondo a naranja */
        color: black; /* Cambia el color del texto a blanco */
    }
    .correo_aqui{
        width:20%;
        margin-left:585px;
    }
    #boton {
            background-image: linear-gradient(to right, #ff6e7f 0%, #bfe9ff  51%, #ff6e7f  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: black;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
          }
          #boton:hover {
            background-position: right center; /* change the direction of the change here */
            color: black;
            text-decoration: none;
          }
  </style>
</head>
<body>
  <header>
    <!-- LOGO -->
    <div class="logo">
      <img src="{{ asset('img/logoWTP.png') }}" alt="Logo" width="100px" id="logo">
    </div>
    <!-- LOGO -->

    <!-- NAVBAR -->
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="#" style="color:#cb2821;">Inicio</a></li>
                <li><a href="{{ route('piezas.index') }}">Gestión</a></li>
                <li><a href="{{ route('nosotros') }}">Sobre nostros</a></li>
                <li><a href="{{ route('ayuda_tecnicos') }}">Soporte Técnico</a></li>
            </ul>
        </nav>
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('NewPassword') }}">Editar perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a></li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- NAVBAR -->
  </header>

    <main>
        <!-- CAROUSEL -->
        <div class="d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/anuncio_lenovo.jpg') }}" class="d-block w-100" alt="Lenovo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/anuncio_msi.jpg') }}" class="d-block w-100" alt="Msi">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/portatil_razer.jpg') }}" class="d-block w-100" alt="Razer">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/hallowin.jpg') }}" class="d-block w-100" alt="Pccomponentes">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- CAROUSEL -->


    </main>

   <!--Lo mas vendido-->
   <div class="vendido">
        <div class="">
            <div class="card bg-custom h-100 d-flex" style="width: 18rem;">
                <img src="img/portatil_msi.jpg" class="card-img-top" alt="Portatil MSI">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center;">Portatil MSI</h5>
                        <p class="card-text">La ultima gana de portatiles MSI ya esta aqui, con una nueva tecnologia para aumentar su potencia y rendimiento incluso en los juegos mas exigentes.</p>
                        <a href="https://es.msi.com/Laptops" class="btn btn-primary">Mas información</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card bg-custom h-100 d-flex" style="width: 18rem;">
                    <img src="img/tarjeta_asus.jpg" class="card-img-top" alt="Tarjeta Asus RTX">
                        <div class="card-body">
                            <h5 class="card-title">Tarjetas Asus</h5>
                            <p class="card-text">Las nuevas tarjetas graficas RTX Asus ROG ya estan aqui para quedarse. Potencia, estilo y silencio todo en uno, ofreciendo los mejores precios para todo el mundo.</p>
                            <a href="https://rog.asus.com/es/" class="btn btn-primary">Mas información</a>
                        </div>
                </div>
            </div>
            <div class="">
                <div class="card bg-custom h-100 d-flex" style="width: 18rem;">
                    <img src="img/asus.png" class="card-img-top" alt="Asus Rog Ally">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Asus a creado su propia consola portatil, con la diferencia de usa Windows, todos nuestros juegos en la palma de las manos. Compite directamente con la Steam deck de Valve.</p>
                        <a href="https://rog.asus.com/es/articles/coming-soon/rog-ally/" class="btn btn-primary">Mas información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   <!--Lo mas vendido-->
   
            <!-- BOTON -->
            <div class="d-flex justify-content-center my-4">
            <a href="{{ route('piezas.index') }}" class="btn btn-secondary">Ir a piezas</a>
        </div>
        <!-- BOTON -->
    <!-- Oferta -->
    <div class="container2">
        <div class="form_container">
            <p class="slogan-title">Se el primero en enterarte de las ultimas<span class="font-style"> noticias y novedades</span></p>
            <form action="{{ url('tabla_suscripciones') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <div class="correo_aqui" style="padding-top:15px;">
                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Tu correo electronico">
                    </div>
                </div>
                    <input type="checkbox" class="form-check-input" name="deacuerdo" id="deacuerdo" required>
                    <label class="form-check-label" for="deacuerdo" style="color: white;">He leído y acepto la cláusula de Información sobre la Protección de Datos</label>
                <br>
                <button type="submit" class="btn_primary" id="boton">
                    {{ __('ENVIAR') }}
                </button>
            </form>
            <br>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="footer">
     
            <div class="footer-content">
                <span>
                    Copyright © 2023 I want that piece
                    <br>
                    Contacto: dennismurciasuarez@gmail.com
                    <br>
                    Dirección:  C/ Una de mi imaginacion, 1, 50015 Zaragoza
                </span>
                <div class="footer-col">
                    <div class="social-media-container">
                        <a href="#"><img src="{{ asset('img/logofacebook.png') }}" alt="Facebook Logo" width="40px" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/logotwitter.png') }}" alt="Twitter Logo" width="40px" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/logoinstagram.png') }}" alt="Instagram Logo" width="40px" class="social-logo"></a>
                    </div>
                    
                </div>
            </div>
    </footer>
    <!-- FOOTER -->

    <!-- SCRIP BOOTSTRAP 5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>
</html>


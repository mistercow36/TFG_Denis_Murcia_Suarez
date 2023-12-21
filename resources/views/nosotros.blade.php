<!DOCTYPE html>
<html>
<head>
  <title>Nosotros | I Want That Piece</title>
  <link rel="icon" type="image/pg" href="{{ asset('img/logoWTP.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
     itegrity="sha384-rbsA2VBQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">
  <style>
     /* FOOTER */
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
        background: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
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

    /* TITULO */
    .titulo {
      text-align: center;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      font-size: 60px;
      color: #333333;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-bottom: 40px;
    }

    .titulo2 {
      text-align: center;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      font-size: 60px;
      color: #333333;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-top: 40px;
      margin-bottom: 20px;
    }

    .titulo3 {
      text-align: center;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      font-size: 30px;
      color: #333333;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-top: 40px;
      margin-bottom: 20px;
    }

    /* IMAGEN LOGO */

    .logoExtendido {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .parrafo {
      font-family: 'Times New Roman', serif;
      font-size: 20px;
      align-items: center;
    }

    .parrafo2 {
      font-family: 'Times New Roman', serif;
      font-size: 20px;
      align-items: center;
      text-align: right;
    }

    .contenedor__principal {
      margin-left: 300px;
      margin-right: 300px;
    }

    .section__2 {
      display: flex;
      gap: 2rem;
    }

    .section__2.1 {
      display: flex;
      flex-direction: column;
    }
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


    .section_3 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.flex-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.texto {
    flex: 1;
    margin-right: 20px; /* Espacio entre el texto y la imagen */
}

.imagen img {
    width: 100%; /* La imagen ocupará el 100% del contenedor */
    max-width: 400px; /* Establece un ancho máximo para la imagen */
}

  </style>
</head>
<body>
  <header>
    <!-- LOGO -->
    <div class="logo">
      <img src="{{ asset('img/logoWTP.png') }}" alt="Logo" width="100px">
    </div>
    <!-- LOGO -->

    <!-- NAVBAR -->
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="home">Inicio</a></li>
                <li><a href="{{ route('piezas.index') }}">Gestión</a></li>
                <li><a href="#" style="color:#cb2821;">Sobre nosotros</a></li>
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
    <!-- NAVBAR -->
  </header>

    <main>
      <!-- LOGO -->
      <div  class="logoExtendido">
        <img src="img/logoWTP.png" alt="I Want That Piece" width="500px">
      </div>
      <!-- LOGO -->

      <div class="contenedor__principal">

        <!-- TEXTO 1 -->
        <div class="section__1">
          <h1 class="titulo">Bienvenidos a I Want That Piece</h1>
          <p class="parrafo">En <b>WTP (I Want That Piece)</b>, creemos en el poder transformador de la tecnología. Desde el momento en que decidimos abrir nuestras puertas, nos comprometimos a ofrecer a nuestros clientes no solo piezas de informática, sino también soluciones que inspiran innovación y despiertan la creatividad. Fundada por un equipo apasionado de entusiastas de la tecnología, nuestra tienda se ha convertido en un destino confiable para todos aquellos que buscan las últimas y mejores piezas de informática.</p>
          <br>
          </div>
        <!-- TEXTO 1 -->

        <!-- TEXTO 2 -->
        <div class="section__2">
          <img src="/img/placabase.jpg" alt="I Want That Piece" width="50%">
          <div class="section__2.1">
          <h1 class="titulo2">Nuestra Historia</h1>
            <p class="parrafo">Nuestra historia comenzó con una visión simple pero poderosa: facilitar el acceso a las herramientas tecnológicas que impulsan el mundo moderno. Desde ese día, hemos estado dedicados a proporcionar una amplia gama de piezas de informática de alta calidad, desde componentes básicos hasta las últimas innovaciones en hardware y accesorios. Nos enorgullecemos de ser una fuente confiable para aficionados, profesionales y empresas que buscan mejorar sus sistemas y alcanzar nuevos límites en el mundo digital.</p>
          </div>
        </div>
        <!-- TEXTO 2 -->

        <h1 class="titulo2">Nuestro Compromiso</h1>

        <!-- TEXTO 3 -->
        <div class="section_3">
          <div class="flex-container">
            <div class="texto">
              <p class="parrafo2">En WTP, no se trata solo de vender productos; se trata de construir relaciones sólidas con nuestros clientes. Nos esforzamos por ofrecer un servicio personalizado y experto a cada persona que entra por nuestras puertas o visita nuestro sitio web. Nuestro equipo está compuesto por apasionados expertos en informática que están listos para brindarte asesoramiento y orientación en cada paso del camino. Nos comprometemos a garantizar que encuentres las piezas de informática adecuadas para satisfacer tus necesidades específicas.
            </div>
            <div class="imagen">
              <img src="/img/rtx.jpg" alt="I Want That Piece" width="50%">
            </div>
          </div>
          
        </div>
        <!-- TEXTO 3 -->

        <!--TEXTO 4-->
        <h1 class="titulo2" style="color: white;">Nuestra Visión</h1>
        <p class="parrafo" style="color: white;">Nuestra visión es ser más que una tienda de informática; queremos ser tu socio tecnológico de confianza. Nos esforzamos por fomentar una comunidad donde los entusiastas y profesionales de la tecnología puedan compartir conocimientos, aprender unos de otros y encontrar inspiración para sus proyectos. Creemos en un futuro impulsado por la innovación, y estamos emocionados de ser parte de tu viaje hacia él.</p>
        <br>
        <p class="parrafo" style="color: white;">Gracias por elegir WTP como tu destino tecnológico. Estamos emocionados de ser parte de tu viaje tecnológico y esperamos poder ayudarte a encontrar las piezas de informática perfectas para tus necesidades únicas.</p>
        
        <h1 class="titulo" style="color: white;">¡Bienvenido a nuestra comunidad tecnológica!</h1>
      </div>
    </main>

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
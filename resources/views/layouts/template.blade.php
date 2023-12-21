<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/pg" href="{{ asset('img/logoWTP.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
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
        border-radius: 5px;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(9.4px);
        -webkit-backdrop-filter: blur(9.4px);
        border: 1px solid rgba(255, 255, 255, 0.3);
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

    .logo {
        max-width: 100px;
    }

    main {
        padding-top: 1rem;
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
          table{
            /* From https://css.glass */
background: rgba(255, 255, 255, 0.5);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(7px);
-webkit-backdrop-filter: blur(7px);
          }
         
    </style>

</head>
<body>
    
    @yield('contenido')

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
    
    <!-- SCRIPT BOOTSTRAP 5.2.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
 
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

body {
    background-image: url('{{ asset("img/fondo.jpg") }}');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
    margin: 0;
    padding-bottom: 100px;
}

.card{
    background: rgba(255, 255, 255, 0.57);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(11.1px);
    -webkit-backdrop-filter: blur(11.1px);
    border: 1px solid rgba(255, 255, 255, 0.61);
}
.container{
    padding-top: 50px;
}
#editar{
    background: rgba(255, 255, 255, 0.57);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(11.1px);
    -webkit-backdrop-filter: blur(11.1px);
    border: 1px solid rgba(255, 255, 255, 0.61); 
}
</style>
</head>
<body>
    <div id="app">
        
            <div class="container">
                
                



                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
 
                            @endif

                            @if (Route::has('register'))

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeVo CRM | Client Relationship Management</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito?family=Orbitron:wght@500;700" rel="stylesheet">   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9c660f0063.js" crossorigin="anonymous"></script>
</head>
<body style="background: rgb(2,0,36);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,93,1) 35%, rgba(0,0,0,1) 100%);}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,118,1) 35%, rgba(0,212,255,1) 100%);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color:#ffffff; font-size:30px; font-family: 'Orbitron', sans-serif;">
                <i class="fa-solid fa-circle-nodes fa-spin"></i> DeVo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" aria-label="{{ __('Toggle navigation') }}" style="color:#ffffff;">
                    <span class="navbar-toggler-icon" style="color:#ffffff;"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('empleado.index') }}" style="color:#ffffff; font-size:15px; margin-left:30px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-user-tie" style="color:#ffffff; margin-right:7px;"></i> Ejecutivos</a>
                        </li>
                        @endif
                    </ul>

                    <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('estadosolicitud.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-file-lines" style="color:#ffffff; margin-right:7px;"></i>Estados</a>
                        </li>
                        @endif
                    </ul>

                    <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-handshake-angle" style="color:#ffffff; margin-right:7px;"></i> Servicios</a>
                        </li>
                        @endif
                    </ul>
                                       
                    <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-person-walking" style="color:#ffffff; margin-right:7px;"></i>{{ __('Clientes') }}</a>
                        </li>
                        @endif
                    </ul>

                    <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('solicitudes.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-file-lines" style="color:#ffffff; margin-right:7px;"></i>Solicitudes</a>
                        </li>
                        @endif
                    </ul>

                    

                   
                    <!--<ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('cotizaciones.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-file-invoice" style="color:#ffffff; margin-right:7px;"></i> Cotizaciones</a>
                        </li>
                        @endif
                    </ul> 

                    <!--<ul class="navbar-nav me-auto">
                    @if(Auth::check())
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('empleado.index') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;"><i class="fa-solid fa-file-invoice-dollar" style="color:#ffffff; margin-right:7px;"></i>Facturación</a>
                        </li>
                        @endif
                    </ul> -->

                 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#ffffff; font-size:15px; font-family: 'Orbitron', sans-serif;">Registrar</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:#ffffff;font-size:15px;">
                                <img class="rounded-circle" src="https://images.pexels.com/photos/556068/pexels-photo-556068.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:30px; height:30px; margin:0;"> 
                                {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav>

        <main style="background: rgb(2,0,36);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,93,1) 35%, rgba(0,0,0,1) 100%);}">
            @yield('content')
        </main>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="width:80%; background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,118,1) 35%, rgba(0,212,255,1) 100%); color:#ffffff;">
  <div class="offcanvas-header">
  <a class="navbar-brand" href="{{ url('/home') }}" style="color:#ffffff; font-size:30px; font-family: 'Orbitron', sans-serif;">
                <i class="fa-solid fa-circle-nodes fa-spin"></i> DeVo
                </a>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="color:#ffffff;"></button>
  </div>
  <div class="offcanvas-body" style="color:#ffffff; padding:30px;">
  @if(Auth::user())
  <p style="margin-left:15px; font-size:20px; font-family: 'Orbitron', sans-serif;">Hola, {{ Auth::user()->name }}</p>
  @endif
  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
          <div class="accordion" id="accordionExample" style="background-color:transparent; border:1px solid transparent;">
  <div class="accordion-item" style="background-color:transparent; color:#ffffff;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:transparent; font-family: 'Orbitron', sans-serif; font-size:15px; font-weight:bold; color:#ffffff;">
      <i class="fa-solid fa-flag-checkered" style="color:#ffffff; margin-right:6px;"></i> Ejecutivos
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a class="nav-link" aria-current="page" href="{{ url('/empleado') }}" style="text-decoration:none; font-family: 'Orbitron', sans-serif; font-size:18px; color:#ffffff;">Editar Ejecutivo</a>
      </div>
    </div>
  </div>
 
  
</div>
            
          </li>

         

          <li class="nav-item">
          <div class="accordion" id="accordionExample" style="background-color:transparent; border:1px solid transparent;">
  <div class="accordion-item" style="background-color:transparent; color:#ffffff;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:transparent; font-family: 'Orbitron', sans-serif; font-size:15px; font-weight:bold; color:#ffffff;">
      <i class="fa-solid fa-flag-checkered" style="color:#ffffff; margin-right:6px;"></i> Servicios
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a class="nav-link" aria-current="page" href="{{ url('/servicios') }}" style="text-decoration:none; font-family: 'Orbitron', sans-serif; font-size:18px; color:#ffffff;">Editar Servicios</a>
      </div>
    </div>
  </div>
 
  
</div>
            
          </li>

          <li class="nav-item">
          <div class="accordion" id="accordionExample" style="background-color:transparent;">
  <div class="accordion-item" style="background-color:transparent; color:#ffffff;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:transparent; font-family: 'Orbitron', sans-serif; font-size:15px; font-weight:bold; color:#ffffff;">
      <i class="fa-solid fa-flag-checkered" style="color:#ffffff; margin-right:6px;"></i> Clientes
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a class="nav-link" aria-current="page" href="{{ url('/clientes') }}" style="text-decoration:none; font-family: 'Orbitron', sans-serif; font-size:18px; color:#ffffff;">Editar Clientes</a>
      </div>
    </div>
  </div>
 
  
</div>
            
          </li>
    
          <li class="nav-item">
          <div class="accordion" id="accordionExample" style="background-color:transparent;">
  <div class="accordion-item" style="background-color:transparent; color:#ffffff;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:transparent; font-family: 'Orbitron', sans-serif; font-size:15px; font-weight:bold; color:#ffffff;">
      <i class="fa-solid fa-flag-checkered" style="color:#ffffff; margin-right:6px;"></i> Solicitudes
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a class="nav-link" aria-current="page" href="{{ url('/solicitudes') }}" style="text-decoration:none; font-family: 'Orbitron', sans-serif; font-size:18px; color:#ffffff;">Editar Solicitudes</a>
      </div>
    </div>
  </div>
 
  
</div>
            
          </li>

          <li class="nav-item">
          <div class="accordion" id="accordionExample" style="background-color:transparent;">
  <div class="accordion-item" style="background-color:transparent; color:#ffffff;">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:transparent; font-family: 'Orbitron', sans-serif; font-size:15px; font-weight:bold; color:#ffffff;;">
      <i class="fa-solid fa-flag-checkered" style="color:#ffffff; margin-right:6px;"></i> Estados
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a class="nav-link" aria-current="page" href="{{ url('/estadosolicitud') }}" style="text-decoration:none; font-family: 'Orbitron', sans-serif; font-size:18px; color:#ffffff;">Editar Estados</a>
      </div>
    </div>
  </div>
 
  
</div>
            
          </li>

         
  </div>
</div>
</body>
</html>

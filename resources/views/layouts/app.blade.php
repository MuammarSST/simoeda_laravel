<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    
</head>
<body class="container-fluid" style="background-image: url('../assets/img/bappeda.jpg');background-size: cover;background-position: center;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"style="opacity: 0.9;margin-bottom: auto;">
        
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                      
               
                       
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                            @if (route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                        {{ Auth::user()->name }}
                           

                              
                            <a class="nav-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf
                                </form>
                            
                        </li>
                        @endguest
                        
                    </ul>

                </div>
                
            </div>
            
        </nav>
        <div style="background: forestgreen;">
            <h5 style="color:white;text-align: center;font-style: italic;">
            © 2024, Dikembangkan oleh : Muammar, SST, M.Kom
            </h5> 
        </div>
        <main class="py-4"> @yield('content')
   
        </main>
        
        
         
        
        
    </div>
    

</body>
</html>

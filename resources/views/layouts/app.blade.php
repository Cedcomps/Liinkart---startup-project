<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LiinkArt, l'application de facturation en ligne pour les professions libérales"/>
    <meta name="author" content="CeDeeV"/>

    <title>@yield('titre') - LiinkArt</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!--Import Google Icon Font-->
        {!! Html::style("https://fonts.googleapis.com/icon?family=Material+Icons") !!}
    <!-- Compiled and minified CSS -->
        {!! Html::style("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css") !!}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <img src="{{ asset('uploads/liinkart logo blanc_petit.png')}}" width="32px" height="48px" alt="liinkart logo white">
                <a href="{{ url('/') }}" class="brand-logo"> {{ config('app.name', 'Laravel') }}</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('/artworks/create') }}">Créer un article</a></li>
                        <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                                {{ Auth::user()->name }} <i class="material-icons right">apps</i>
                            </a>
                            <ul id="dropdown1" class="dropdown-content">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>        
    @if (Auth::user())
        @yield('sidebar')
    @endif
        @yield('content')
    
    <footer>
       @include('layouts._footer')           
    </footer>
    <!-- Scripts -->
    <!-- Compiled and minified JavaScript -->    
    {!! Html::script("//code.jquery.com/jquery-2.1.1.min.js") !!}
    {!! Html::script("//cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js") !!}
    <script src={{ asset("js/app.js") }}></script>


</body>
</html>

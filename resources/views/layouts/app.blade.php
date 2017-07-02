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
    <div id="app">
        <nav id="navbar-fixed">
            <div class="nav-wrapper">
                
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
        </nav><a href="#" data-activates="slide-out" class="show-on-large button-collapse">Side nav demo</a>
        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        
       {{--  <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#dashboard">Tableau de bord</a></li>
                    <li class="tab col s3"><a class="active" href="#test2">Messagerie</a></li>
                    <li class="tab col s3 disabled"><a href="#test3">Statistiques</a></li>
                    <li class="tab col s3"><a href="#test4">Ma galerie</a></li>
                    <li class="tab col s3"><a href="#test4">Compte</a></li>
                </ul>
            </div>
        </div> --}}
    </div>        

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

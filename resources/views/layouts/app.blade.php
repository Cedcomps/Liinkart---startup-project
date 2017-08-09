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
    <link rel="stylesheet" href="{{ asset('bower_components/sweetalert2/dist/sweetalert2.min.css') }}">
    <!--Import Google Icon Font-->
    {!! Html::style("https://fonts.googleapis.com/icon?family=Material+Icons") !!}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('css')

</head>
<body>
    <nav class="liinkart-white z-depth-2">
        <div class="nav-wrapper">
            <a id="liinkart-logo" href="{{ url('/') }}" class="brand-logo">
                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 764 1146" style="enable-background:new 0 0 764 1146;" xml:space="preserve">
                    <polygon fill="#73A9C0" points="191,573 0,382 0,764 "/>
                    <polygon fill="#7670AE" points="382,382 191,191 191,573 "/>
                    <polygon fill="#8BAE87" points="382,764 191,573 191,955 "/>
                    <polygon fill="#7D7ABC" points="191,573 382,764 382,382 "/>
                    <polygon fill="#7B5B97" points="191,191 382,382 382,0 "/>
                    <polygon fill="#6D82B8" points="0,382 191,573 191,191 "/>
                    <polygon fill="#8BB6A6" points="0,764 191,955 191,573 "/>
                    <polygon fill="#AEC380" points="191,955 382,1146 382,764 "/>
                    <polygon fill="#D38450" points="573,573 764,764 764,382 "/>
                    <polygon fill="#F3A368" points="382,764 573,955 573,573 "/>
                    <polygon fill="#B55677" points="382,382 573,573 573,191 "/>
                    <polygon fill="#C97077" points="573,573 382,382 382,764 "/>
                    <polygon fill="#DBD175" points="573,955 382,764 382,1146 "/>
                    <polygon fill="#EAC76B" points="764,764 573,573 573,955 "/>
                    <polygon fill="#E06666" points="764,382 573,191 573,573 "/>
                    <polygon fill="#934782" points="573,191 382,0 382,382 "/>
                    <polyline fill="#FFFFFF" points="418,469.9 537,436 537,837 418,837 "/>
                    <polyline fill="#FFFFFF" points="346,469.9 227,436 227,837 346,837 "/>
                    <ellipse fill="#FFFFFF" cx="477.5" cy="336" rx="59.5" ry="56"/>
                    <ellipse fill="#FFFFFF" cx="286.5" cy="336" rx="59.5" ry="56"/>
                </svg>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">more_vert</i></a>
            <ul class="right hide-on-med-and-down">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                    <li><a class="waves-effect waves-light sign-up" href="{{ route('register') }}">Créer un compte</a></li>
                @else
                    <li><a href="{{ url('/messages') }}">@include('messenger.unread-count')</a></li>
                    <li><a href="{{ url('/artworks/create') }}">Créer une oeuvre</a></li>
                    <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                            <img class="avatar" src="@if(filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)) {{ Auth::user()->avatar}}
                                                        @else {{ asset('storage/uploads/avatars/' .  Auth::user()->avatar) }}
                                                        @endif">
                            {{ Auth::user()->name }} <i class="material-icons right">apps</i>
                        </a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li>
                                @if(Auth::user()->admin)
                                <a href="{{ url('dashboard')}}">Administration</a>
                                @endif
                                <a href="{{ route('user.show', [auth()->user()->id]) }}">Profil</a>
                                <a href="/messages">Messagerie @include('messenger.unread-count')</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
            <li><img src="{{ asset('/uploads/liinkart-logo-sidenav.png')}}"></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><i class="material-icons">perm_identity</i>Se connecter</a></li>
                    <li><a href="{{ route('register') }}"><i class="material-icons">person_add</i>Créer un compte</a></li>
                @else
                    <li>
                        <div class="user-view">
                            <div class="user-background"><img src="{{ asset ('uploads/user-bg.jpg')}}"></div>
                        <img class="circle" src="@if(filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)) {{ Auth::user()->avatar}}
                                                        @else {{ asset('storage/uploads/avatars/' .  Auth::user()->avatar) }}
                                                        @endif">
                        <span class="white-text name">{{ Auth::user()->name }}</span>
                        <span class="white-text email">{{ Auth::user()->email }}</span>
                        </div>
                    </li>
                    @if(Auth::user()->admin)
                    <li><a href="{{ url('dashboard')}}"><i class="material-icons">settings_input_component</i>Administration</a></li>
                    @endif
                    <li><a href="{{ route('artworks.index')}}"><i class="material-icons">home</i>Accueil</a></li>
                    <li><a href="{{ route('user.show', [auth()->user()->id]) }}"><i class="material-icons">face</i>Profil</a>
                    <li><a href="/messages"><i class="material-icons">email</i>Messagerie @include('messenger.unread-count')</a></li>
                    <li><a href="{{ url('/artworks/create') }}"><i class="material-icons">add</i>Créer une oeuvre</a></li>
                @endif
                    <li><div class="divider"></div></li>
                    <li><a class="text-lighten-3" href="{{ route('faq') }}"><i class="material-icons">help</i>Aide</a></li>
                    <li><a class="text-lighten-3" href="{{ url('contact') }}"><i class="material-icons">email</i>Nous contacter</a></li>
                @if(Auth::check())
                    <li><div class="divider"></div></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">close</i>Se déconnecter</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                @endif
            </ul>
        </div>
    </nav>
     

    @if (Auth::user())
        @yield('sidebar')
    @endif
        @yield('content')

{{-- bouton scroll top --}}
<a href="#" id="scrollButton"><i class="material-icons medium">arrow_upward</i></a>

<section id="background-design2">
    @include('layouts.background-footer')
</section>

    @include('layouts._footer')           
    <!-- Scripts --> 
    {!! MaterializeCSS::include_full() !!}

    <script src={{ asset("js/script.js") }}></script>
    <script src={{ asset('bower_components/sweetalert2/dist/sweetalert2.min.js')}}></script>
    @include('sweet::alert')
    @if(Session::has('achievement'))
        <script type="text/javascript">
            swal({
                title: 'Challenge débloqué !',
                text: 'Vous avez débloqué un nouveau badge: {{Session::get('achievement')}}',
                type: 'success'
            });
        </script>
    @endif
    {{-- @include('analytics') --}}
    @yield('js')
</body>
</html>

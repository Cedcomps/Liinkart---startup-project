@extends('layouts.app')
@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')
<section class="header-page gradient--bloody">
<div class="row">
<div class="section"></div>
    <div class="col s12 center"></div>
</div>
</section>
<section class="reference">
    <div class="container">
        <div class="row">
             <div class="col s12 offset-m2 m8 offset-l3 l6" style="position: relative;">  
                <div class="card grey lighten-5" style="position: absolute; top: -200px;">
                    <div class="card-content center">
                            <h4 class="blue-grey-text text-darken-4">Connexion </h4>
                            @if (session('confirmation-success'))
                                <div class="green-text">
                                    {{ session('confirmation-success') }}
                                </div>
                            @endif
                            @if (session('confirmation-danger'))
                                <div class="red-text">
                                    {!! session('confirmation-danger') !!}
                                </div>
                            @endif
                        <div class="row">
                            <form class="col s12" role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" >Adresse Email</label>
                                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="red-text">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Mot de passe</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="red-text">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                    <div class=" col s12">
                                        <p>
                                         <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                         <label for="remember"> Se souvenir</label>
                                        </p>
                                    </div>
                                <div class="row">
                                    <div class="col s12">                               
                                        <div class="section"></div>
                                            <a href="{{ url('/login/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="{{ url('/login/twitter') }}" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                            <a href="{{ url('/login/google') }}" class="btn btn-google"><i class="fa fa-google"></i> Google</a>
                                        <div class="section"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 offset-l3 l6">
                                        <button type="submit" class="btn btn-large">Se connecter</button>
                                    </div>
                                    <div class="center col s12 offset-l3 l6">
                                        <a class="forget-password" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                        <a class="havent-acount" href="{{ route('register') }}">Pas encore de compte?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

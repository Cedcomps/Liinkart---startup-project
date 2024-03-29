@extends('layouts.app')

@section('content')
<section class="header-page gradient--sunset">
<div class="row">
<div class="section"></div>
    <div class="col s12 center"></div>
</div>
</section>
<section class="reference" >
<div class="container">
    <div class="row">
        <div class="col s12 offset-m2 m8 offset-l3 l6">
            <div class="card grey lighten-5">
                <div class="card-content center">
                    <h4>Nouveau mot de passe</h4>
                    @if (session('status'))
                        <div class="green-text">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="red-text{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Vérification de l'adresse Email</label>
                            <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            
                        </div>

                        <div class="red-text{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Nouveau mot de passe</label>
                            <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="red-text{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirmer le nouveau mot de passe</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                       <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l3 l6">
                                <button type="submit" class="btn btn-primary">
                                   Mettre à jour
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

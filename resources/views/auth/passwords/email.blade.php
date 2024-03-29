@extends('layouts.app')

@section('content')
<section class="header-page gradient--cloud">
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
                    <h4>Oublie de mot de passe</h4>
                    @if (session('status'))
                        <div class="green-text">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="red-text{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Adresse Email</label>
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l3 l6">
                                <button type="submit" class="btn btn-primary">
                                   Envoyez le lien par Email
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

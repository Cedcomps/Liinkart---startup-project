@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">  
            <div class="card">
                <span class="card-title">Nom : {{ $user->name }}
                <img src=" {{ asset('storage/uploads/avatars/' . $user->avatar) }}" style="float: right; border-radius: 50%;"></span>
                <p> Description bio</p>
            </div>
        </div>
    <div class="row">
        <div class="col s12 m5 offset-m5"><p>activité</p>
                <p>Oeuvres publiées</p>
                <p>Oeuvres remportées</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
           {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel', 'files' => true]) !!}
                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('avatar') ? 'has-error' : '' !!}">
                    {!! Form::file('avatar', ['class' => 'form-control', 'placeholder' => 'Avatar']) !!}
                    {!! $errors->first('avatar', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                </div>
            {!! Form::close() !!} 
        </div>
    </div>
</div>
            
                    
                <p>description bio</p>
                {{-- <p>avis moyen + nombres d'avis</p> --}}
                
                <p>membre depuis : {{ $user->created_at }}</p>

        <br>
        <div class="panel panel-primary">   
           
                     
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection
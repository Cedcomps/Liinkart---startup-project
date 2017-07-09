@extends('layouts.app')

@section('content')
	<div class="row">
    <div class="col s12 offset-l3 l6">
        {!! Form::open(['url' => 'avatar', 'files' => true]) !!}
        <div class="file-field input-field">Envoi d'un avatar</div>
            <div {!! $errors->has('image') ? 'has-error' : '' !!}">
                        {!! Form::file('image') !!}
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
            {!! Form::submit('Envoyer !', ['class' => 'btn']) !!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

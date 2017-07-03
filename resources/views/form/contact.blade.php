@extends('layouts.app')

@section('content')
    <div class="container">
		<div class="row">
			<div class="col s8 push-s2"> 
				<h1 class="text-center">Contactez-nous</h1>
					<h3><i class='material-icons md-36'>send</i></h3>
					{!! Form::open(['url' => 'contact', 'class' => 'col s12']) !!}
						<div class="input-field col s6 {!! $errors->has('nom') ? 'has-error' : '' !!}">
							{!! Form::text('nom', null, ['class' => 'validate', 'placeholder' => 'Votre nom']) !!}
							{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="input-field col s6 {!! $errors->has('objet') ? 'has-error' : '' !!}">
							{!! Form::text('objet', null, ['class' => 'validate', 'placeholder' => 'Sujet']) !!}
							{!! $errors->first('objet', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="input-field col s12 {!! $errors->has('email') ? 'has-error' : '' !!}">
							{!! Form::email('email', null, ['class' => 'validate', 'placeholder' => 'Votre email']) !!}
							<label for="email" data-error="wrong" data-success="right"></label>
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="input-field col s12 {!! $errors->has('texte') ? 'has-error' : '' !!}">
							{!! Form::textarea ('texte', null, ['class' => 'materialize-textarea', 'data-length' => '400', 'placeholder' => 'Votre message']) !!}
							{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
						</div>
						{!! Form::submit('Envoyer ', ['class' => 'btn waves-effect waves-light']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>

@endsection

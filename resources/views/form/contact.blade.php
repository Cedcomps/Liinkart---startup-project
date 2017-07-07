@extends('layouts.app')

@section('content')
<header class="header-page">
	<div class="row">
		<div class="col s12 center">
        	<h1>Contactez-nous</h1>
	    </div>
	</div>
</header>
<section class="reference">
	<div class="container">
		<div class="row">
			<div class="col m2"></div>
			<div class="col s12 m8 center">
				<h2>Sur slack</h2><img class="responsive-img" src="{{ asset("/uploads/slack.png") }}">
				<h5>Vous souhaitez discuter sur le chat d'un soucis technique ou simplement apporter votre pierre a l'édifice?</h5><br>
				<p>Nous sommes à l'écoute de toutes personnes souhaitant apporter son expérience sur la plateforme LiinkART. La communauté est au coeur de notre réflexion. Afin de répondre à vos besoins et d'améliorer considérablement votre expérience sur le site, enregistrez votre adresse email pour que nous vous envoyons une invitation à vous connecter sur notre slack.</p>
				<br><br>
				<div class="card-panel">
	            	<p>Enregistrez votre adresse mail afin de recevoir votre invitation au <a href="https://liinkart.slack.com/">#Slack</a></p>
	            	{!! Form::open(['route' => 'store.email']) !!}
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                	</div>
		                {!! Form::submit('Envoyer !', ['class' => 'btn waves-effect waves-light liinkart-light']) !!}
	            </div>
		                {!! Form::close() !!}
	        </div>
	        <div class="col m2"></div>
		</div>
	</div>
</section>
<div class="divider"></div>
<section class="reference">
    <div class="container">
    	
		<div class="row">
			<div class="col m2"></div>
			<div class="col s12 m8 center"> 
				<h2 class="center">Par eMail</h2><i class='material-icons medium'>email</i>
					{!! Form::open(['url' => 'contact', 'class' => 'col s12']) !!}
				<div class="card-panel">
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
						{!! Form::submit('Envoyer ', ['class' => 'btn waves-effect waves-light liinkart-light']) !!}
				</div>
					{!! Form::close() !!}
			</div>
			<div class="col m2"></div>
		</div>
	</div>
</section>
@endsection

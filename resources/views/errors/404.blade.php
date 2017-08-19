@extends('layouts.app')
@section('titre')
    Erreur 404
@endsection
@section('content')
<section class="erreur404"> </section>
    <div class="container ">
		<div class="row artwork-article">
			<div class="center col s12">	
				<h3>Il y a un problème !</h3>
			
				<p>Nous sommes désolés mais la page que vous désirez atteindre n'existe pas...</p>
				<div class="section"></div>
				<a class="waves-effect waves-light btn-large" href="{{ route('artworks.index')}}">RETOURNER DANS LA GALERIE</a>
			</div>
		</div>
	</div>
@stop
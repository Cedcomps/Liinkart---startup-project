<!DOCTYPE html>
<html>
<head>
	<title>Certificat d'authenticité - LiinkART</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/css?family=Mrs+Saint+Delafield" rel="stylesheet">
</head>
<body>
<style type="text/css">
	
	body {
		margin: 0;
		font-family: 'Roboto', sans-serif;
		
		background: url("{{asset('/uploads/certificat.jpg')}}") center no-repeat;
		color: #000000 !important;
		opacity: 0.70;
	}
	.container {
		text-align: center;
	}
	#signature {
		padding: 0;
		margin: 0;
		font-size: 5em;
		line-height: 1em;
		font-family: 'Mrs Saint Delafield', cursive;
	}
	h1 {
		font-size: 3em;
		margin-top: 120px;
		margin-bottom: 50px;
		line-height: 1.3;
		font-weight: 100;
	}
	.date {
		margin-top: 30px;
	}
	footer {
		position: fixed;
		bottom: 35px;
		left: 20px;
		opacity: 0.5;
	}
</style>


<div class="container">
	<div class="row">
		<div class="col s12">
			<h1>CERTIFICAT D'AUTHENTICITE</h1>
			Je, soussigné(e) {{ $post->user->name }}
		certifie que l’œuvre désignée ci-dessous est l'originale et une pièce unique.
		<br>
		<br>
		Titre de l’œuvre : {{$post->titre}}<br>
		Nom de l'artiste : {{ $post->user->name }}<br>
		Technique et matériaux : {{$post->category->category}}<br>
		Dimensions : 
			@if(!empty($post->largeur))
				largeur: {{$post->largeur}}cm,&nbsp;
			@endif
			@if(!empty($post->longueur))
				longueur: {{$post->longueur}}cm,&nbsp;
			@endif
			@if(!empty($post->hauteur))
				hauteur: {{$post->hauteur}}cm
			@endif
		@if(empty($post->largeur) AND empty($post->longueur) AND empty($post->hauteur))
		Non connues
		@endif
		<br>
		Année de réalisation : {{$post->year}}<br>
		N° d’identification LiinkART: {{ Carbon\Carbon::now()->formatLocalized('%Y') }}{{ $post->id }}
		<br>
		<br>
		Le présent certificat et les mentions qui y figurent constituent le droit de propriété de l’œuvre.
		<br>
		</div>		
	</div>
	<div class="row">
		<div class="col offset-s6 s6 date">Fait le {{ Carbon\Carbon::now()->formatLocalized('%d %B %Y') }}<br><span id="signature">{{ $post->user->name }}</span></div>
		
	</div>
</div>
<footer>Certificat n° {{ Carbon\Carbon::now()->formatLocalized('%Y') }}{{ $post->id }} - Généré par LiinkART</footer>
</body>
</html>


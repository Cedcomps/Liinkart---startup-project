@extends('layouts.app')
 
@section('content')
<section class="reference">
	<div class="container">
		<div class="row">
			<div class="col s12 center">

					<h1 class="light">Demande envoyée au staff</h1>
				
				<div class="preloader-wrapper big active">
			      <div class="spinner-layer spinner-blue">
			        <div class="circle-clipper left">
			          <div class="circle"></div>
			        </div><div class="gap-patch">
			          <div class="circle"></div>
			        </div><div class="circle-clipper right">
			          <div class="circle"></div>
			        </div>
			      </div>

			      <div class="spinner-layer spinner-red">
			        <div class="circle-clipper left">
			          <div class="circle"></div>
			        </div><div class="gap-patch">
			          <div class="circle"></div>
			        </div><div class="circle-clipper right">
			          <div class="circle"></div>
			        </div>
			      </div>

			      <div class="spinner-layer spinner-yellow">
			        <div class="circle-clipper left">
			          <div class="circle"></div>
			        </div><div class="gap-patch">
			          <div class="circle"></div>
			        </div><div class="circle-clipper right">
			          <div class="circle"></div>
			        </div>
			      </div>

			      <div class="spinner-layer spinner-green">
			        <div class="circle-clipper left">
			          <div class="circle"></div>
			        </div><div class="gap-patch">
			          <div class="circle"></div>
			        </div><div class="circle-clipper right">
			          <div class="circle"></div>
			        </div>
			      </div>
			    </div>
				<p>Votre demande de connexion au #Slack de Liinkart a bien été reçue par notre équipe. Nous vous enverrons un lien d'ici peu. <br>En attendant si vous le souhaitez, vous pouvez aussi télécharger directement l'application <a href="https://slack.com/">Slack</a> sur votre appareil.</p>
				<br><br>
				<a class="waves-effect waves-light btn-large" href="{{ route('artworks.index')}}">RETOURNER DANS LA GALERIE</a>
			</div>
		</div>
	</div>
</section>
@endsection
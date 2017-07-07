@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row artwork-article">
			<div class="col s12">
				<div class="col l6 s12 artwork-image-first">
					
					 	<img  class="responsive-img" src="{{ asset ('uploads/office.jpg')}}">
					
				</div>
				<div class="col l6 s12">
					<div class="section">
						<h1>{{ $post->titre }}</h1>
						<span class="chip-technique">{{ $post->technique }}</span>
						<span class="right-align"><a class="waves-effect waves-light btn-large z-depth-3" href="#modal1"><i class="material-icons right">gavel</i>Faire une offre</a></span>
						{{-- gavel modal --}}
						<div id="modal1" class="modal">
						    <div class="modal-content">
						    	<h4>Proposez votre offre</h4>
						    	<blockquote>
						    			Rappel
									  	<p class="subheading">La vente aux enchères à l'aveugle a un but bien précis et il est bon de vous rappeler pourquoi Afin d'éviter une offre farfelue, nous imposons une fourchette minimale concernant la proposition. De ce fait, vous pourrez estimer la valeur d'une oeuvre en toute intégrité. En effet certains composants et outils nécessaires à la création peuvent parfois être onéreux selon l'oeuvre à créer...</p>
				    			</blockquote>
						    	<p>Une fois la proposition envoyée, vous serez avertis de la réponse de l'artiste par email.</p> 
						    	<form action="#">
								    <p class="range-field">
								    	<input type="range" class="range" id="test5" min="40" max="2500" />
								    </p>
								</form>
						    	<p>Et n'oubliez pas une chose : la vente peut s'avérer être une véritable surprise pour les amoureux de l'Art !</p>
					    		<span class="center-align">
							    	<h2 class="proposition" ><output name="result">--</output></h2>
							    	<a class="z-depth-3 waves-effect modal-close waves-light btn-danger btn-large red darken-1"><i class="material-icons left">cancel</i>ANNULER</a>
							    	<a class="z-depth-3 waves-effect waves-light btn-large right"><i id="zoom-gavel" class="material-icons left">gavel</i>FAIRE UNE OFFRE</a>
						    	</span>
						    </div>
						</div>
					</div>
					<br>
					<div class="section">
						<div class="card-panel"><h5>Description de l'oeuvre</h4>
						<p>{{ $post->contenu }}</p>
							<div class="col s4 center">
								<a class="btn tooltipped waves-effect btn-large btn-floating brown accent-3" data-position="bottom" data-delay="50" data-tooltip="Certificat d'authenticité inclus"><i class="material-icons">brightness_auto</i></a>
							</div>
							<div class="col s4 center">
								<a class="btn tooltipped waves-effect btn-large btn-floating light-blue accent-3" data-position="bottom" data-delay="50" data-tooltip="Livraison offerte"><i class="material-icons">local_shipping</i></a>
							</div>
							<div class="col s4 center">
								<a class="btn tooltipped waves-effect btn-large btn-floating green accent-3" data-position="bottom" data-delay="50" data-tooltip="Membre vérifié par notre équipe"><i class="material-icons">verified_user</i></a>
							</div>
						</div>
					</div>
					<br><br><br>
					<div class="divider"></div>
					<div class="section">
						<h5>Détails sur l'artiste</h4>
						<div class="valign-wrapper">
                                <div class="col s2">
                                    <a href="{{ route('user.show', ['id' => $post->user->id]) }}"><img src="{{ asset('uploads/logo.png')}}" alt="avatar artiste" class="circle responsive-img"></a>
                                </div>
                                <div class="col s10">
                                    <a class="black-text" href="{{ route('user.show', ['id' => $post->user->id]) }}">By {{ $post->user->name or "Artiste"}}</a>
                                </div>
                            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
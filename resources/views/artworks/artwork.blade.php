@extends('layouts.app')
@section('titre')
	{{ ucfirst($post->titre) }} de {{ $post->user->name }}
@endsection
@section('css')
   <link href="{{ asset('bower_components/easyzoom/css/easyzoom.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="header-page gradient--bloody">
	<div class="row">
    <div class="section"></div>
		<div class="col s12 center">
        	<h1>{{ ucfirst($post->titre) }}</h1>
        	<span class="white-text">Mise en ligne le {{ $post->created_at->format('d/m/Y') }} {{-- et se termine d'ici {{ $post->created_at->addDays(30)->diffForHumans(null, true) }} --}}</span>
	    </div>
	</div>
</section>	
	<div class="container">
		<div class="row artwork-article">
			<div class="col s12">
				<div class="col l6 s12 artwork-image-first">
			<div class="section"></div>
				@if(count($post->posts_photos))
					<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails is-ready">
					    <a href="{{ asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename) }}">
						 	<img class="responsive-img" src=" {{ asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename) }}" alt="oeuvre d'art liinkart">
					    </a>
					</div>
				@endif
				<ul class="thumbnails">
			        @foreach($post->posts_photos as $posts_photo)
						<li>
							<a href="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}" data-standard="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}">
								<img src="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}" width="30%" height="30%" alt="photos de l'oeuvre d'art liinkart">
							</a>
						</li>
					@endforeach	
				</ul>
				<a data-position="bottom" data-delay="50" data-tooltip="Signaler à la modération?" href="{{ route('artworks.revision',$post) }}" onclick="event.preventDefault(); document.getElementById('revision').submit();"><i class="material-icons tiny">error</i> Signaler l'annonce</a>
                <form id="revision" action="{{ route('artworks.revision',$post)  }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
				</div>
				<div class="col l6 s12">
					
					<br>
					<div class="section">
						<div class="card-panel"><h3>Description de l'oeuvre</h3>
						<p>{{ $post->contenu }}</p>
							<a class="white-text btn waves-effect btn-large liinkart-light waves-input-wrapper z-depth-3" href="#modal1"><i class="zoom-gavel material-icons left">gavel</i>PROPOSER UNE OFFRE</a>
								{{-- gavel modal --}}
								<div id="modal1" class="modal">
								    <div class="modal-content">
								    	<h2>Proposez votre offre</h2>
								    	<blockquote>
								    			Rappel
											  	<p class="subheading">La vente aux enchères à l'aveugle a un but bien précis et il est bon de vous rappeler pourquoi Afin d'éviter une offre farfelue, nous imposons une fourchette minimale concernant la proposition. De ce fait, vous pourrez estimer la valeur d'une oeuvre en toute intégrité. En effet certains composants et outils nécessaires à la création peuvent parfois être onéreux selon l'oeuvre à créer...</p>
						    			</blockquote>
								    	<p>Une fois la proposition envoyée, vous serez avertis de la réponse de l'artiste par email.</p> 
								    	@include('messenger.partials.proposition')
								    </div>
								</div>
						<div class="section"></div>
						<h5>Technique</h5>
							<span class="chip-technique">
								@if (isset($post->category))
		                            {{ $post->category->category }}
		                        @endif
	                        </span>
	                        <div class="section"></div>
	                        <h5>Dimensions</h5>
									@if(!empty($post->largeur))
										Largeur: {{$post->largeur}}cm<br>
									@endif
									@if(!empty($post->longueur))
										Longueur: {{$post->longueur}}cm<br>
									@endif
									@if(!empty($post->hauteur))
										Hauteur: {{$post->hauteur}}cm
									@endif
									@if(empty($post->largeur) AND empty($post->longueur) AND empty($post->hauteur))
									<p>Non renseignées</p>
									@endif
	                        <div class="section"></div>
							<h5>Détails sur l'artiste</h5>
							<div class="valign-wrapper">
		                        <div class="col s2">
		                            <a href="{{ route('user.show', ['id' => $post->user->id]) }}"><img src="@if(filter_var($post->user->avatar, FILTER_VALIDATE_URL)) {{$post->user->avatar}}
		                                @else {{ asset('storage/uploads/avatars/' . $post->user->avatar) }}
		                                @endif" alt="avatar artiste" class="circle responsive-img"></a>
		                        </div>
		                        <div class="col s10">
		                            <a class="black-text" href="{{ route('user.show', ['id' => $post->user->id]) }}"><h4>{{ $post->user->name or "Artiste"}}</h4></a>
		                            <div class="chip">{{ $post->user->specialist }}</div>
		                            @if($post->user->likes()->first())
	                                <span>
	                                    <i class="justlike tiny material-icons">favorite</i>
	                                    <span class="countLike">{{ $post->user->likes()->count() }}</span>
	                                </span>
	                                @endif    
		                            <p>{{ $post->user->country }}</p><br>
		                        </div>
		                    </div>  
		                    <a class="tooltipped" target=_blank href="{{route('certificat.pdf',$post)}}"" data-position="bottom" data-delay="50" data-tooltip="Télécharger le certificat d'authenticité"><img width="35" height="35" src="{{ asset('uploads/achievement/Certificat d\'authenticité créé.png') }}" alt="certificat d'authenticité liinkart" style="">&nbsp;Certificat d'authenticité</a>
						</div>
					</div>
					<div class="section"></div>
					
				</div>  
            </div>	
		</div>
	</div>
@endsection
@section('js')
    <script src="{{ asset('bower_components/easyzoom/src/easyzoom.js') }}"></script>
    <script src="{{ asset('js/artwork.js') }}"></script>
@endsection
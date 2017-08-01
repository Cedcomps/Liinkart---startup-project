<div class="row">
	<div class="col s12">
        <h3 class="align-center">Modération des oeuvres signalées</h3>
            <table class="table highlight responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Oeuvre</th>
                    <th>Photos</th>
                    <th>Description</th>
                    <th>Auteur</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            
            
            @foreach ($posts->where('revision', true) as $post)
                
	               <tr>
	                    <td>{!! $post->id !!}</td>
	                    <td class=""><strong>{!! $post->titre !!}</strong></td>
	                    <td style="display: inline-flex;">
                    	@foreach($post->posts_photos as $posts_photo)
							<a href="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}" data-standard="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}">
								<img class="responsive-img" src="{{ asset('storage/uploads/artworks/' . $posts_photo->filename) }}"  alt="photos de l'oeuvre d'art liinkart">
							</a>
						@endforeach	
	                    </td>
	                    <td>{!! $post->contenu !!}</td>
	                    <td>{!! $post->user->name !!}</td>
	                    <td>{!! link_to_route('artworks.show', 'Voir', [$post->id], ['class' => 'btn']) !!}</td><
	                    <td>
	                        {!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.destroy', $post->id]]) !!}
	                            {!! Form::submit('Supprimer', ['class' => 'btn', 'onclick' => 'return confirm(\'Vraiment supprimer ce post?\')']) !!}
	                        {!! Form::close() !!}
	                    </td>
	                </tr>
             
			@endforeach
            </tbody>
        </table>
    </div>
	
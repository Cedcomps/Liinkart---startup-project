<div class="row">
    <h3 class="align-center">Modération des oeuvres signalées</h3>
        <table class="centered table highlight responsive-table">
        <thead>
            <tr>
                <th><i class="material-icons">track_changes</i></th>
                <th><i class="material-icons">opacity</i> Oeuvre</th>
                <th><i class="material-icons">perm_media</i> Photos</th>
                <th><i class="material-icons">subject</i> Description</th>
                <th><i class="material-icons">account_box</i> Auteur</th>
                <th><i class="material-icons">remove_red_eye</i></th>
                <th><i class="material-icons">done_all</i></th>
                <th><i class="material-icons">delete_forever</i></th>
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
                    <td>{!! link_to_route('artworks.show', 'Voir', [$post->id], ['class' => 'btn']) !!}</td>
                    <td>
                    	{!! Form::open(['method' => 'PUT', 'route' => ['dashboard.update', $post->id]]) !!}
                            {!! Form::submit('Valider', ['class' => 'btn green','style' =>'color:white;', 'onclick' => 'return confirm(\'Ne pas modérer ce post?\')']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['dashboard.destroy', $post->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn red','style' =>'color:white;', 'onclick' => 'return confirm(\'Vraiment supprimer ce post?\')']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
         
		@endforeach
        </tbody>
    </table>
</div>
	
<div class="row">
	<div class="center col s12 l2">
		<div class="card-panel deep-orange lighten-1 white-text">
			<h5>Nombre total d'utilisateurs</h5>
			<h2>{{ $countUser }}</h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel pink lighten-1 white-text">
			<h5>Oeuvres actuellement en ligne</h5>
			<h2>{{ $countPost }}</h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel blue lighten-1 white-text">
			<h5>Nombre de messages échangés</h5>
			<h2>{{ $countMessage }}</h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel light-green lighten-1 white-text">
			<h5>Nombre d'offres lancées</h5>
			<h2>{{ $countThread }}</h2>
		</div>
	</div>
	<div class="center col s12 l4">
		{{-- <div class="card-panel deep-purple lighten-2 white-text">
			<h5>Top 10 notoriété</h5>
			<table>
				<tbody>
				@foreach ($users->likes()->count() as $user)
	                <tr>
	                    <td class=""><strong>{!! $user->name !!}</strong></td>
	                    <td>
	                        <i class="justlike material-icons">favorite</i>
	                        <span class="countLike">{{ $user->likes()->count() }}</span>
	                    </td>
	                </tr>
	            @endforeach
       	 		</tbody>
            </table>
		</div> --}}
	</div>
</div>
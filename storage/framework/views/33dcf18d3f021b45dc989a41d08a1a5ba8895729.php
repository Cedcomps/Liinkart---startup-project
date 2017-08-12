<div class="row">
	<div class="center col s12 l2">
		<div class="card-panel deep-orange lighten-1 white-text">
			<h5>Nombre total d'utilisateurs</h5>
			<h2><?php echo e($countUser); ?></h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel pink lighten-1 white-text">
			<h5>Oeuvres actuellement en ligne</h5>
			<h2><?php echo e($countPost); ?></h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel blue lighten-1 white-text">
			<h5>Nombre de messages échangés</h5>
			<h2><?php echo e($countMessage); ?></h2>
		</div>
	</div>
	<div class="center col s12 l2">
		<div class="card-panel light-green lighten-1 white-text">
			<h5>Nombre d'offres lancées</h5>
			<h2><?php echo e($countThread); ?></h2>
		</div>
	</div>
</div>
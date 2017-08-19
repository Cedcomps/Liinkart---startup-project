	<?php $__env->startSection('titre'); ?>
    Le coin presse
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--sunset">
	<div class="row">
    <div class="section"></div>
		<div class="col s12 center">
        	<h1>Dans la Presse</h1>
	    </div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col s12 offset-m1 m10">
			<div class="section"></div>
			<h2 class="center">Les Parutions de LiinkART dans la presse</h2>
			<div class="section"></div>
			<div class="divider"></div>
			<div class="section"></div>
				<div class="col m12 l8">
					<img class="materialboxed responsive-img" data-caption="Article du Républicain Lorrain Startup Weekend de Metz 2016" alt="Article Startup Weekend de Metz 2016 liinkart" src="<?php echo e(asset('/uploads/presse/presse liinkart 1.png')); ?>">
				</div>
				<div class="col m12 l4">
					<img class="materialboxed responsive-img" data-caption="Article du Républicain Lorrain lors de la victoire du Startup Weekend" alt="Article gagnat startup weekend metz 2016 liinkart" src="<?php echo e(asset('/uploads/presse/presse liinkart 2.png')); ?>">
				</div>
			<div class="divider"></div>
			<div class="section"></div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 offset-m1 m10">
			<div class="section"></div>
			<h6 class="center">Pour la presse</h6>
			<div class="section"></div>
			<div class="divider"></div>
			<div class="section"></div>
				<div class="col s12 m4">
					<img class="responsive-img center-align" alt="LiinkART logo sidenav" src="<?php echo e(asset('/uploads/liinkart democratise art.jpg')); ?>">
				</div>
				<div class="col s12 m2">
					<img class="responsive-img center-align" alt="LiinkART logo sidenav" src="<?php echo e(asset('/uploads/liinkart-logo-sidenav.png')); ?>">
				</div>
				<div class="col s12 m3">
					<img class="responsive-img center-align" alt="LiinkART logo" src="<?php echo e(asset('/uploads/logo.png')); ?>">
				</div>
				<div class="col s12 m3">
					<img class="responsive-img center-align" alt="Créateur de LiinkART" src="<?php echo e(asset('/uploads/Cedric Compagnon.jpg')); ?>">
				</div>
			<div class="divider"></div>
			<div class="section"></div>
			<a href="https://www.dropbox.com/sh/6y9oqhd71qq93p7/AADFciQyxlCptddybDs20SqLa?dl=0" class="center-align"><i class="material-icons">file_download</i>Télécharger le kit média</a>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
	$(document).ready(function(){
    	$('.materialboxed').materialbox();
  	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('titre'); ?>
    Erreur 404
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="erreur404"> </section>
    <div class="container ">
		<div class="row artwork-article">
			<div class="center col s12">	
				<h3>Il y a un problème !</h3>
			
				<p>Nous sommes désolés mais la page que vous désirez atteindre n'existe pas...</p>
				<div class="section"></div>
				<a class="waves-effect waves-light btn-large" href="<?php echo e(route('artworks.index')); ?>">RETOURNER DANS LA GALERIE</a>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
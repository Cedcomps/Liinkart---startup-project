<?php $__env->startSection('titre'); ?>
    Erreur 404
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="container">
		<div class="row artwork-article">
			<div class="col s12 m10 offset-m1">		
				<h3>Il y a un problème !</h3>
			</div>
			<div> 
				<p>Nous sommes désolés mais la page que vous désirez n'existe pas...</p>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
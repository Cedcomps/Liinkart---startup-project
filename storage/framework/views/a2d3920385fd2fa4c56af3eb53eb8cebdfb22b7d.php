<?php $__env->startSection('titre'); ?>
    Erreur accès base de données
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Il y a un problème !</h3>
            </div>
            <div class="panel-body"> 
                <p>Notre base de données semble inaccessible pour le moment.</p>
                <p>Veuillez nous en excuser.</p>
                <div class="section"></div>
                <a class="waves-effect waves-light btn-large" href="<?php echo e(route('artworks.index')); ?>">RETOURNER DANS LA GALERIE</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
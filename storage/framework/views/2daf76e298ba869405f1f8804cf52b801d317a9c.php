 
<?php $__env->startSection('content'); ?>
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body"> 
                <p>Nom : <?php echo e($user->name); ?></p>

                <p>Email : <?php echo e($user->email); ?></p>
            </div>
        </div>              
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
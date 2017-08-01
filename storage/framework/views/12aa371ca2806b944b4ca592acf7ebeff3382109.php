<?php $__env->startSection('titre'); ?>
    Dernières oeuvres d'art postées
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--pink">
    <div class="row">
    <div class="section"></div>
        <div class="col s12 center">
            <h1>Recherche</h1>
        </div>
    </div>
</section>
    <div class="container">   
        <?php if(isset($info)): ?>
            <div class="row"><?php echo e($info); ?></div>
        <?php endif; ?>
        <div class="row">
            <section class="liste-pagination">
                <?php echo $__env->make('artworks.liste', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </section>  
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset("js/paginationAjax.js")); ?>></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
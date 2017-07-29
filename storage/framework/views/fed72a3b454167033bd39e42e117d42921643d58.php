<?php $__env->startSection('titre'); ?>
	Administration
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s12">
        <ul class="tabs tabs-fixed-width">
            <li class="tab col s3"><a class="active" href="#admin">Administration</a></li>
            <li class="tab col s3"><a href="#utilisateurs">Utilisateurs</a></li>
            <li class="tab col s3 disabled"><a href="#payement">Payements</a></li>
            <li class="tab col s3"><a href="#artworks">Oeuvres en ligne</a></li>
        </ul>
    </div>
    <div id="admin" class="col s12"><?php echo $__env->make('admin.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
    <div id="utilisateurs" class="col s12">
        <section class="liste-pagination">
            <?php echo $__env->make('admin.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </section>
    </div>
    <div id="payement" class="col s12"><?php echo $__env->make('admin.payement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
    <div id="artworks" class="col s12"><?php echo $__env->make('admin.artworks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
</div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src=<?php echo e(asset("js/paginationAjax.js")); ?>></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
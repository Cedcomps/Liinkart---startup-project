<?php $__env->startSection('titre'); ?>
    Messagerie
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('messenger.partials.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="section"></div>
    <div class="section"></div>
	<h3 class="center">Messagerie</h3 class="center">
	<p class="center">Retrouvez ici les propositions et échanges pour les oeuvres en cours</p>
    <div class="section"></div>
<div class="row">
	<div class="col s12 offset-m2 m8">
    <div class="divider"></div>
	    <?php echo $__env->renderEach('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads'); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
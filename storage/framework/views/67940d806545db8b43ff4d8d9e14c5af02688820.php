<?php $__env->startSection('titre'); ?>
    Messagerie
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('messenger.partials.flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
	<div class="col s12 offset-m1 m10">
	    <?php echo $__env->renderEach('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads'); ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
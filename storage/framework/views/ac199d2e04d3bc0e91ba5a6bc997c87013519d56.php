<?php $__env->startSection('titre'); ?>
    Messages 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s12 offset-l2 l8 msg-conversation">
		<div class="card">
			<div class="card-content"">
		        <h4 class="center"><?php echo e($thread->subject); ?></h4>
		        <div class="divider"></div>
		        <?php echo $__env->renderEach('messenger.partials.messages', $thread->messages, 'message'); ?>

		        <?php echo $__env->make('messenger.partials.form-message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		    </div>
	    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(asset('js/messenger.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
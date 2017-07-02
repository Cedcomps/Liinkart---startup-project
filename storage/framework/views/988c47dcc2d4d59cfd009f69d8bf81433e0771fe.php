<?php $__env->startSection('content'); ?>
	<h1><?php echo e($post->id); ?></h1>

	<h2><?php echo e($post->title); ?></h2>

	<p><?php echo e($post->contenu); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
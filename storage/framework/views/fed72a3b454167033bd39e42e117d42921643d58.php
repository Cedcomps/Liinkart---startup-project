    <!-- Sidebar -->
    <?php $__env->startSection('sidebar'); ?>
        <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
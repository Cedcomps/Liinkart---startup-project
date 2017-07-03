  <!-- Sidebar -->
  <?php $__env->startSection('admin-navbar'); ?>
    <?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__env->stopSection(); ?>
  

      <!-- Your Page Content Here -->
        <?php echo $__env->yieldContent('content'); ?>

  <!-- Control Sidebar -->
    <?php echo $__env->make('admin.control_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $count = Auth::user()->newThreadsCount(); ?>
<?php if($count > 0): ?>
    <span class="new badge" data-badge-caption="message(s)"><?php echo e($count); ?></span>
<?php endif; ?>

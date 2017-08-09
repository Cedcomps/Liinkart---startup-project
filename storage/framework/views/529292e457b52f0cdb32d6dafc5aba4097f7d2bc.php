<?php $count = Auth::user()->newThreadsCount(); ?>
<?php if(($count > 0) && ($count = 1)): ?>
    <span class="new badge" data-badge-caption="message"><?php echo e($count); ?></span>
<?php elseif($count > 1): ?>
    <span class="new badge" data-badge-caption="messages"><?php echo e($count); ?></span>
<?php endif; ?>

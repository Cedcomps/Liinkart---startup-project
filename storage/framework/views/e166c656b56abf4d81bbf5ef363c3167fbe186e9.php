<div class="media">
    <a class="pull-left" href="#">
       <img style="border-radius: 50%;" class="responsive-img" alt="<?php echo e($message->user->name); ?>" src="
            <?php if(filter_var($message->user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($message->user->avatar); ?>

            <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $message->user->avatar)); ?>

            <?php endif; ?>">
    </a>
    <div class="media-body">
        <h5 class="media-heading"><?php echo e($message->user->name); ?></h5>
        <p><?php echo e($message->body); ?></p>
        <div class="text-muted">
            <small>Posté <?php echo e($message->created_at->diffForHumans()); ?></small>
        </div>
    </div>
</div>
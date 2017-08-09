<div class="media" data-userid="<?php echo e($message->user->id); ?>">
    <a class="avatar-chat" href="<?php echo e(route('user.show', [$message->user->id])); ?>">
       <img class="circle responsive-img" alt="<?php echo e($message->user->name); ?>" src="
            <?php if(filter_var($message->user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($message->user->avatar); ?>

            <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $message->user->avatar)); ?>

            <?php endif; ?>">
    </a>
    <div>
        <p class="body-message"><?php echo e($message->body); ?></p>
        <div class="text-muted">
            <small><i class="material-icons tiny">access_time</i>Posté <?php echo e($message->created_at->diffForHumans()); ?></small>
        </div>
    </div>
</div>
<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="alert <?php echo e($class); ?>">
    <h4 class="media-heading">
        <a class="conversation" href="<?php echo e(route('messages.show', $thread->id)); ?>"><?php echo e(ucfirst( $thread->subject)); ?></a></h4>
        <small class="text-muted" style="display: block;"><strong>Acheteur potentiel:</strong><a alt="Profil de <?php echo e($thread->creator()->name); ?>" href="<?php echo e(route('user.show', [$thread->creator()->id])); ?>"> <?php echo e($thread->creator()->name); ?></a></small>

        <?php if($thread->userUnreadMessagesCount(Auth::id())): ?>
            <span class="new badge" data-badge-caption="non lu"><?php echo e($thread->userUnreadMessagesCount(Auth::id())); ?></span>
        <?php endif; ?>

        <?php if($thread->latestMessage->price): ?>
            <div class="chip right">
                Offre à <?php echo e($thread->latestMessage->price); ?> €
            </div>
        <?php endif; ?>
        
    <small class="text-muted"><strong>Dernier message:</strong></small>
    <div class="media" data-userid="<?php echo e($thread->latestMessage->user->id); ?>">
        <a class="avatar-chat" href="<?php echo e(route('user.show', [$thread->latestMessage->user->id])); ?>">
           <img class="circle responsive-img" alt="<?php echo e($thread->latestMessage->user->name); ?>" src="
                <?php if(filter_var($thread->latestMessage->user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($thread->latestMessage->user->avatar); ?>

                <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $thread->latestMessage->user->avatar)); ?>

                <?php endif; ?>">
        </a>
        <div>
            <p class="body-message"><?php echo e($thread->latestMessage->body); ?></p>
            <div class="text-muted">
                <small><i class="material-icons tiny">access_time</i>Posté <?php echo e($thread->latestMessage->created_at->diffForHumans()); ?></small>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
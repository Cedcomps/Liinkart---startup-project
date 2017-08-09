<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="alert <?php echo e($class); ?>">
    <h5 class="media-heading">
        <a class="conversation" href="<?php echo e(route('messages.show', $thread->id)); ?>"><?php echo e($thread->subject); ?></a></h5>

        <?php if($thread->userUnreadMessagesCount(Auth::id())): ?>
       <span class="new badge" data-badge-caption="non lu"><?php echo e($thread->userUnreadMessagesCount(Auth::id())); ?></span>
        <?php endif; ?>

        <?php if($thread->latestMessage->price): ?>
            <div class="chip">
                <?php echo e($thread->latestMessage->price); ?> €
            </div>
        <?php endif; ?>
        
    <p>
        <?php echo e($thread->latestMessage->body); ?>

    </p>
    <p>
        <small><strong>Acheteur:</strong> <?php echo e($thread->creator()->name); ?></small>
    </p>
    <?php if($thread->participantsString(Auth::id())): ?>
    <p>
        <small><strong>Artiste:</strong> <?php echo e($thread->participantsString(Auth::id())); ?></small>
    </p>
    <?php endif; ?>
</div>
<div class="divider"></div>
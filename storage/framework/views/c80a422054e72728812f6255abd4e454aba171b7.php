<div class="grid-sizer"></div>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="grid-item" data-postid="<?php echo e($post->id); ?>">
        <div class="card hoverable sticky-action">
            <div class="card-content">
                <div class="valign-wrapper">
                    <div class="col s2">
                        <a href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>"><img src="<?php if(filter_var($post->user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($post->user->avatar); ?>

                    <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $post->user->avatar)); ?>

                    <?php endif; ?>" alt="avatar artiste" class="circle avatar-responsive"></a>
                    </div>
                    <div class="col s10">
                        <a class="black-text" href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>">By <?php echo e(isset($post->user->name) ? $post->user->name : "Artiste"); ?></a>
                        <?php if($post->user->likes()->first()): ?>
                        <span>
                            <i class="tiny material-icons">favorite</i>
                            <span class="countLike"><?php echo e($post->user->likes()->count()); ?></span>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="card-image grey lighten-5 waves-effect waves-block waves-light">
                <?php if(count($post->posts_photos)): ?>
                    <img class="activator" src=" <?php echo e(asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)); ?>" alt="<?php echo e(ucfirst($post->titre)); ?>">
                <?php else: ?>
                    <img class="activator" src=" <?php echo e(asset('uploads/office.jpg')); ?>" alt="oeuvre d'art liinkart">
                <?php endif; ?>
                <span class="nbr-photo">
                    <img src="<?php echo e(asset('uploads/pictures.png')); ?>">
                    <span class="nbr-photo2"><b><?php echo e(count($post->posts_photos)); ?></b></span>
                </span>
            </div>
            <div class=" card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo e(ucfirst($post->titre)); ?><i class="material-icons right">more_vert</i></span>
                <span class="chip-technique left-align">
                    <?php if(isset($post->category)): ?>
                    <?php echo e($post->category->category); ?>

                    <?php endif; ?>
                </span>
                <span class="time-ago"><?php echo e($post->created_at->diffForHumans()); ?> </span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo e(ucfirst($post->titre)); ?><i class="material-icons right">close</i></span>
                <p><?php echo e($post->contenu); ?></p>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('artworks/tag/' . $tag->tag_url)); ?>" class="chip"><?php echo e($tag->tag); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card-action">
                <a href="<?php echo e(route('artworks.show', ['id' => $post])); ?>" class="right-align">VOIR EN DETAILS</a>
            </div>
        </div>  
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if(isset($info)): ?>
                <div class="row"><?php echo e($info); ?></div>
            <?php endif; ?>
            <?php echo $posts->links(); ?>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="artworks col s12 m6 l4" data-postid="<?php echo e($post->id); ?>">
                    <div class="card hoverable sticky-action">
                        <div class="card-content">
                            <div class="valign-wrapper">
                                <div class="col s2">
                                    <a href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>"><img src=" <?php echo e(asset('storage/uploads/avatars/' . $post->user->avatar)); ?>" alt="avatar artiste" class="circle responsive-img"></a>
                                </div>
                                <div class="col s10">
                                    <a class="black-text" href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>">By <?php echo e(isset($post->user->name) ? $post->user->name : "Artiste"); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo e(asset ('uploads/office.jpg')); ?>">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo e($post->titre); ?><i class="material-icons right">more_vert</i></span>
                            <span class="chip-technique left-align"><?php echo e($post->technique); ?></span>
                            <span class="time-ago"><?php echo e($post->created_at->diffForHumans()); ?> </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo e($post->titre); ?><i class="material-icons right">close</i></span>
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
            <?php echo $posts->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
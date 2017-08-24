<?php $__env->startSection('titre'); ?>
    Dernières oeuvres d'art postées
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--pink">
    <div class="row">
    <div class="section"></div>
    <div class="section"></div>
        <div class="col s12">
            <?php if(isset($info)): ?>
                <div class="center row"><?php echo e($info); ?></div>
            <?php endif; ?>
            <div class="row">
                <div class="z-depth-5 col s12 offset-m3 m6 input-field" style="background-color: white;">
                <?php echo Form::open(['route' => 'search','method' => 'GET']); ?>

                <?php echo e(Form::token()); ?>

                    <i class="material-icons prefix search-prefix">search</i>
                    <?php echo e(Form::text('searchCat',$value = null, ['placeholder' => "Rechercher l'oeuvre qui me fera vibrer", 'id' => 'searchCat'])); ?>

                <?php echo Form::close(); ?>

                </div>
            </div>
        <div class="section"></div>
        </div>
    </div>
</section>
    
        <div class="row">
            <span style="text-align: center;"><?php echo e($posts->links()); ?></span>
            <section class="grid">
                <?php echo $__env->make('artworks.liste', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </section>  
            <span style="text-align: center;"><?php echo e($posts->links()); ?></span>
        </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src=<?php echo e(asset("js/masonry.pkgd.min.js")); ?>></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript">
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 0,
        isFitWidth: true,
        gutter: 30
        });
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
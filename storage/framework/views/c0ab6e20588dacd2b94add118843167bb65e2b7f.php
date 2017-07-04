 
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col s6 push-s3">
                <h1 class="align-center">Ajout d'une Oeuvre</h1>
                <div class="card-panel text-darken-2"> 
                    <form method="POST" action="<?php echo e(url('/artworks')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="row<?php echo e($errors->has('titre') ? ' has-error' : ''); ?>">
                            <div class="input-field col s12">
                                <label for="titre" data-error="wrong" data-success="right">Titre de votre oeuvre d'art</label>
                                <input class="validate" placeholder="Titre" name="titre" type="text" value="<?php echo e(old('titre')); ?>" autofocus>
                                <?php if($errors->has('titre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('titre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row<?php echo e($errors->has('contenu') ? ' has-error' : ''); ?>">
                            <div class="input-field col s12">
                                <label for="contenu" data-error="wrong" data-success="right">Description</label>
                                <textarea class="materialize-textarea" placeholder="Contenu" name="contenu" cols="50" rows="10"><?php echo e(old('contenu')); ?></textarea>
                                <?php if($errors->has('contenu')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('contenu')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row<?php echo e($errors->has('tags') ? ' has-error' : ''); ?>">
                            <div class="input-field col s12">
                                <label for="tags" data-error="wrong" data-success="right">Tags</label>
                                <input class="validate" placeholder="Entrez les tags séparés par des virgules" name="tags" type="text" value="<?php echo e(old('tags')); ?>">
                                <?php if($errors->has('tags')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tags')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <button type="submit" class="btn">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
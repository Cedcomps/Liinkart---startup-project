<?php $__env->startSection('content'); ?>
<section class="header-page gradient--cloud">
<div class="row">
<div class="section"></div>
    <div class="col s12 center"></div>
</div>
</section>
<section class="reference" >
<div class="container">
    <div class="row">
        <div class="col s12 offset-m2 m8 offset-l3 l6">
            <div class="card grey lighten-5">
                <div class="card-content center">
                    <h4>Oublie de mot de passe</h4>
                    <?php if(session('status')): ?>
                        <div class="green-text">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="red-text<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email">Adresse Email</label>
                                <input id="email" type="email" class="validate" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l3 l6">
                                <button type="submit" class="btn btn-primary">
                                   Envoyez le lien par Email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--sunset">
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
                    <h4>Nouveau mot de passe</h4>
                    <?php if(session('status')): ?>
                        <div class="green-text">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="red-text<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email">Vérification de l'adresse Email</label>
                            <input id="email" type="email" class="validate" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>                            
                        </div>

                        <div class="red-text<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password">Nouveau mot de passe</label>
                            <input id="password" type="password" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="red-text<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm">Confirmer le nouveau mot de passe</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                       <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l3 l6">
                                <button type="submit" class="btn btn-primary">
                                   Mettre à jour
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
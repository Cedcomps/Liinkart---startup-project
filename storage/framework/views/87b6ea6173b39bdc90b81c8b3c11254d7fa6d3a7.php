<?php $__env->startSection('css'); ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--lemon">
<div class="row">
<div class="section"></div>
    <div class="col s12 center"></div>
</div>
</section>
<section class="reference" >
    <div class="container">
        <div class="row">
            <div class="col s12 offset-m2 m8 offset-l3 l6" style="position: relative;">  
                <div class="card grey lighten-5" style="position: absolute; top: -200px;">
                    <div class="card-content center">
                        <h4>Créer un compte </h4>
                        <?php if(session('confirmation-success')): ?>
                            <div class="green-text">
                                <?php echo e(session('confirmation-success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('confirmation-danger')): ?>
                            <div class="red-text">
                                <?php echo session('confirmation-danger'); ?>

                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <form class="col s12" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="input-field col s12<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <label for="name" control-label">Nom</label>
                                    <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-red">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-field col s12<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email">Adresse Email</label>
                                    <input id="email" type="email" class="validate" name="email" value="<?php echo e(old('email')); ?>" required>
                                    <?php if($errors->has('email')): ?>
                                        <span class="red-text">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-field col s12<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password">Mot de passe</label>
                                    <input id="password" type="password" name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="red-text">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-field col s12">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                
                                <div class="col s12">                               
                                    <div class="section"></div>
                                        <a href="<?php echo e(url('/login/facebook')); ?>" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                        <a href="<?php echo e(url('/login/twitter')); ?>" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                        <a href="<?php echo e(url('/login/google')); ?>" class="btn btn-google"><i class="fa fa-google"></i> Google</a>
                                    <div class="section"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 offset-l3 l6">
                                        <button type="submit" class="btn btn-large">Créer un compte</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
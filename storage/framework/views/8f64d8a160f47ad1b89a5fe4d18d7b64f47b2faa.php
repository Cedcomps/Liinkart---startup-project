<?php $__env->startSection('content'); ?>
	<div class="row">
    <div class="col s12 offset-l3 l6">
        <?php echo Form::open(['url' => 'avatar', 'files' => true]); ?>

        <div class="file-field input-field">Envoi d'un avatar</div>
            <div <?php echo $errors->has('image') ? 'has-error' : ''; ?>">
                        <?php echo Form::file('image'); ?>

                        <?php echo $errors->first('image', '<small class="help-block">:message</small>'); ?>

            <?php echo Form::submit('Envoyer !', ['class' => 'btn']); ?>

            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
		<div class="row">
			<div class="col s6 push-s3"> 
				<h1 class="text-center">Contactez-moi</h1>
					<?php echo Form::open(['url' => 'contact', 'class' => 'col s12']); ?>

						<div class="input-field col s6 <?php echo $errors->has('nom') ? 'has-error' : ''; ?>">
							<?php echo Form::text('nom', null, ['class' => 'validate', 'placeholder' => 'Votre nom']); ?>

							<?php echo $errors->first('nom', '<small class="help-block">:message</small>'); ?>

						</div>
						<div class="input-field col s6 <?php echo $errors->has('objet') ? 'has-error' : ''; ?>">
							<?php echo Form::text('objet', null, ['class' => 'validate', 'placeholder' => 'Sujet']); ?>

							<?php echo $errors->first('objet', '<small class="help-block">:message</small>'); ?>

						</div>
						<div class="input-field col s12 <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
							<?php echo Form::email('email', null, ['class' => 'validate', 'placeholder' => 'Votre email']); ?>

							<label for="email" data-error="wrong" data-success="right"></label>
							<?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

						</div>
						<div class="input-field col s12 <?php echo $errors->has('texte') ? 'has-error' : ''; ?>">
							<?php echo Form::textarea ('texte', null, ['class' => 'materialize-textarea', 'placeholder' => 'Votre message']); ?>

							<?php echo $errors->first('texte', '<small class="help-block">:message</small>'); ?>

						</div>
						<?php echo Form::submit('Envoyer !', ['class' => 'btn waves-effect waves-light']); ?>

					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
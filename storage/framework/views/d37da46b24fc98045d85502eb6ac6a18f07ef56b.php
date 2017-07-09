 
<?php $__env->startSection('content'); ?>
    <div class="container">
        <br>
        <div class="row">   
            <div>Modification d'un utilisateur</div>
            <div class="panel-body"> 
                <div class="col s10 offset-s1">
                    <?php echo Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']); ?>

                        <div class="form-group <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']); ?>

                            <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <div class="form-group <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
                            <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

                            <?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

                        </div>
                        <?php echo Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">  
            <div class="card">
                <span class="card-title">Nom : <?php echo e($user->name); ?>

                <img src=" <?php echo e(asset('storage/uploads/avatars/' . $user->avatar)); ?>" style="float: right; border-radius: 50%;"></span>
                <p> Description bio</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m5 offset-m5"><p>activité</p>
                    <p>Oeuvres publiées</p>
                    <p>Oeuvres remportées</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m10 offset-m1">
               <?php echo Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'files' => true]); ?>

                    <div class="col s6 <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
                        <?php echo Form::text('name', null, ['placeholder' => 'Nom']); ?>

                        <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <div class="col s6 <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
                        <?php echo Form::email('email', null, ['placeholder' => 'Email']); ?>

                        <?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <div class="col s6 <?php echo $errors->has('avatar') ? 'has-error' : ''; ?>">
                        <?php echo Form::file('avatar'); ?>

                        <?php echo $errors->first('avatar', '<small class="help-block">:message</small>'); ?>

                    </div>
                    <?php echo Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']); ?>

                <?php echo Form::close(); ?> 
            </div>
        </div>
    </div>
</div>
            
                    
                <p>description bio</p>
                
                
                <p>membre depuis : <?php echo e($user->created_at); ?></p>

        <br>
        <div class="panel panel-primary">   
           
                     
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
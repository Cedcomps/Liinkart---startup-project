<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="reference">
    <div class="container">
        <div class="row">
            <div class="col s12">  
                <div class="card">
                    <div class="card-content center">
                        <div>
                        <img class="responsive-img" src=" <?php echo e(asset('storage/uploads/avatars/' . $user->avatar)); ?>" style="border-radius: 50%;">
                            <h3><?php echo e($user->name); ?></h3><br>
                            <h5><?php echo e($user->country); ?></h5>
                            <h6><?php echo e($user->city); ?></h6><br>
                            <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->details->name); ?></td>
                                <?php if($item->isUnlocked()): ?>
                                    <td>Unlocked</td>
                                <?php else: ?>
                                    <td>Progress: <?php echo e($item->points); ?>/<?php echo e($item->details->points); ?></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <p>Membre depuis : <?php echo e($user->created_at->diffForHumans(null, true)); ?></p><br>
                        </div>
                        <div class="card-content center">
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/acorn.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/adduser.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/arrow.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/badge.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bag.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/balloon.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/barchart.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bolt.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/brew.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bronze.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/brush.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bug.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/calendar.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cards.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/chat.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/clock.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cloud.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/coffee.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/conversation.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/crosshair.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cut.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/doc.png"></a>
                        </div>
                    <p></p>
                    </div>
                    <?php if(Auth::id() === $user->id || isset(Auth::user()->admin) && Auth::user()->admin == 1): ?>
                        <div class="card-action"><a href="#modal1"><i class="material-icons left">edit</i>Editer profil</a>
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="container" id="editProfile">
                                        <div class="row">
                                            <div class="col s12 m10 offset-m1">
                                                <?php echo Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'files' => true]); ?>

                                                    <div class="col s12 <?php echo $errors->has('name') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('name', 'Votre nom')); ?>

                                                        <?php echo Form::text('name', null, ['placeholder' => 'Nom']); ?>

                                                        <?php echo $errors->first('name', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s12 <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('email', 'Votre email')); ?>

                                                        <?php echo Form::email('email', null, ['placeholder' => 'Email']); ?>

                                                        <?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s6 <?php echo $errors->has('country') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('country', 'Votre Pays')); ?>

                                                        <?php echo Form::text('country', null, ['placeholder' => 'Votre pays']); ?>

                                                        <?php echo $errors->first('country', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s6 <?php echo $errors->has('city') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('city', 'Votre ville actuelle')); ?>

                                                        <?php echo Form::text('city', null, ['placeholder' => 'Votre ville actuelle']); ?>

                                                        <?php echo $errors->first('city', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s6 <?php echo $errors->has('specialist') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('specialist', 'Votre specialité')); ?>

                                                        <?php echo Form::text('specialist', null, ['placeholder' => 'Votre specialité']); ?>

                                                        <?php echo $errors->first('specialist', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s6 <?php echo $errors->has('avatar') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('avatar', 'Votre image de profil')); ?>

                                                        <?php echo Form::file('avatar'); ?>

                                                        <?php echo $errors->first('avatar', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s12 <?php echo $errors->has('description') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('description', 'Votre description')); ?>

                                                        <?php echo Form::textarea('description', null, ['placeholder' => 'Description', 'class' => "materialize-textarea", 'cols' => "50",  'rows' => "10"]); ?>

                                                        <?php echo $errors->first('description', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <?php echo Form::submit('Envoyer', ['class' => 'z-depth-3 waves-effect waves-light btn-large right']); ?>

                                                <?php echo Form::close(); ?> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col s12 m4">  
                <div class="card">
                    <div class="card-content">
                        <h5>Spécialisation</h5>
                        <h6><span><?php echo e($user->specialist); ?></span></h6>
                    </div>
                </div>
            </div>
            <div class="col s12 m8">  
                <div class="card">
                    <div class="card-content">
                        <h5>Description bio</h5>
                        <p><?php echo e($user->description); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
      <div class="card">
                           
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="artworks" class="col s6 m4 l3">
                <div class="card hoverable sticky-action">
                    <div class="card-content">                        
                    
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
                    </div>
                    <div class="card-action">
                        <a href="<?php echo e(route('artworks.show', ['id' => $post])); ?>" class="right-align">VOIR EN DETAILS</a>

                        <?php if(auth()->check() and auth()->user()->admin): ?>
                            <form method="POST" action="<?php echo e(route('artworks.destroy', ['id' => $post->id])); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <input class="btn btn-danger" onclick="return confirm('Vraiment supprimer cet article ?')" type="submit" value="Supprimer">
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </div>
</section>
            
                

        <br>
        <div class="panel panel-primary">   
           
                     
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
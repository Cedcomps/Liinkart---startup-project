<?php $__env->startSection('titre'); ?>
   Profil de <?php echo e(ucfirst($user->name)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
   <link href="<?php echo e(asset('css/user.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="reference">
    <div class="container">
        <div class="row">
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content center">
                        <div>
                            <img class="circle responsive-img" alt="<?php echo e($user->name); ?>" src="<?php if(filter_var($user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($user->avatar); ?>

                                                        <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $user->avatar)); ?>

                                                        <?php endif; ?>">
                            <span id="nameandlike">
                                <h3 data-userid="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></h3>
                                <?php if($user->likes()->first()): ?>
                                <span>
                                    <i class="justlike material-icons">favorite</i>
                                    <span class="countLike"><?php echo e($user->likes()->count()); ?></span>
                                </span>
                                <?php endif; ?>
                            </span>
                            <div class="chip"><?php echo e($user->specialist); ?></div>
                            
                            <h5><?php echo e($user->country); ?> - <?php echo e($user->city); ?></h5><br>
                            <?php $__currentLoopData = $achievements->sortByDesc('unlocked_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php if($item->isUnlocked()): ?>
                                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo e($item->details->name); ?>">
                                        <img src="<?php echo e(asset('uploads/achievement/' . $item->details->name . '.png')); ?>" alt="<?php echo e($item->details->name); ?>">
                                    </a>
                                <?php elseif($item->isLocked()): ?>
                                    <a class="tooltipped achievement-locked" data-position="bottom" data-delay="50" data-tooltip="<?php echo e($item->details->name); ?>">
                                        <img src="<?php echo e(asset('uploads/achievement/' . $item->details->name . '.png')); ?>" alt="<?php echo e($item->details->name); ?>">
                                    </a>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <p>Membre depuis : <?php echo e($user->created_at->diffForHumans(null, true)); ?></p><br>
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
                                                    <div class="col s12 <?php echo $errors->has('country') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('country', 'Votre Pays')); ?>

                                                        <?php echo Form::text('country', null, ['placeholder' => 'Votre pays']); ?>

                                                        <?php echo $errors->first('country', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="col s12 <?php echo $errors->has('city') ? 'has-error' : ''; ?>">
                                                        <?php echo e(Form::label('city', 'Votre ville actuelle')); ?>

                                                        <?php echo Form::text('city', null, ['placeholder' => 'Votre ville actuelle']); ?>

                                                        <?php echo $errors->first('city', '<small class="help-block">:message</small>'); ?>

                                                    </div>
                                                    <div class="input-field col s12 <?php echo $errors->has('specialist') ? 'has-error' : ''; ?>">
                                                        <?php echo Form::select('specialist', ['Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte']); ?>

                                                        <?php echo $errors->first('specialist', '<small class="help-block">:message</small>'); ?>

                                                        <?php echo e(Form::label('specialist', 'Votre specialité')); ?>

                                                    </div>
                                                    <div class="col s12 file-field <?php echo $errors->has('avatar') ? 'has-error' : ''; ?>">
                                                        <div class="btn">
                                                        <?php echo e(Form::label('avatar', 'Votre image de profil')); ?>

                                                        <?php echo Form::file('avatar'); ?>

                                                        </div>
                                                        <div class="file-path-wrapper">
                                                        <?php echo $errors->first('avatar', '<small class="help-block">:message</small>'); ?>

                                                            <input class="file-path validate" type="text">
                                                        </div>
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
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content">
                        <h5>Notoriété</h5>
                        <p>Vous aimez mes oeuvres? Participez à augmenter ma notoriété</p>
                        <div class="interaction center">
                            <a href="#" class="like">
                            <?php if(Auth::check()): ?>
                                <?php echo $user->likes()->where('user_id', $user->id)->where('userhasliked_id', Auth::user()->id )->where('like', 1)->first() ? '<i class="material-icons notoriete">favorite</i>' : '<i class="material-icons notoriete">favorite_border</i>'; ?>

                            <?php else: ?>
                            <i class="material-icons notoriete">favorite_border</i>
                            <?php endif; ?>
                            </a> 
                        </div>
                        <div class="divider"></div>
                        <p><?php echo e($user->name); ?> a reçu: <i class="justlike tiny material-icons">favorite</i><span class="countLike"> <?php echo e($user->likes()->count()); ?></span>
                        <?php if($user->likes()->count() <= 1): ?>
                        <span>  coup de coeur</span>
                        <?php else: ?>
                        <span>  coups de coeur</span>
                        <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content">
                        <h5>Biographie</h5>
                        <p><?php echo e($user->description); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class=" grid">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="grid-sizer"></div>               
            <div id="artworks" class="grid-item">
                <div class="card hoverable sticky-action">
                    <div class="card-image waves-effect waves-block waves-light">
                        <?php if(count($post->posts_photos)): ?>
                                <img class="activator" src=" <?php echo e(asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)); ?>" alt="oeuvre d'art liinkart">
                            <?php else: ?>
                                <img class="activator" src=" <?php echo e(asset('uploads/office.jpg')); ?>" alt="oeuvre d'art liinkart">
                            <?php endif; ?>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo e($post->titre); ?><i class="material-icons right">more_vert</i></span>
                        <span class="chip-technique left-align">
                            <?php if(isset($post->category)): ?>
                                <?php echo e($post->category->category); ?>

                            <?php endif; ?></span>
                        <span class="time-ago"><?php echo e($post->created_at->diffForHumans()); ?> </span>
                    </div>
                    <div class="card-reveal">
                        <span class="raccourcir-titre card-title grey-text text-darken-4"><?php echo e(ucfirst($post->titre)); ?><i class="material-icons right">close</i></span>
                        <p><?php echo e($post->contenu); ?></p>
                    </div>
                    <div class="card-action post-delete">
                        <a href="<?php echo e(route('artworks.show', ['id' => $post])); ?>" class="right-align">VOIR EN DETAILS</a>

                        <?php if(Auth::id() === $user->id || isset(Auth::user()->admin) && Auth::user()->admin == 1): ?>
                            <br><?php echo Form::open(['method' => 'DELETE', 'route' => ['artworks.destroy',  $post->id]]); ?>

                                    <?php echo Form::submit('supprimer', ['style' =>'color:white;', 'class' => 'btn red']); ?>

                            <?php echo Form::close(); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
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
    <script src="<?php echo e(asset('js/user.js')); ?>"></script>
    <?php if(Auth::check()): ?>
    <script>
        var token = '<?php echo e(Session::token()); ?>';
        var ajaxUserHasLiked = '<?php echo e(Auth::user()->id); ?>';
        var urlLike = '<?php echo e(route('like')); ?>';
    </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
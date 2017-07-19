<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LiinkArt, l'application de facturation en ligne pour les professions libérales"/>
    <meta name="author" content="CeDeeV"/>

    <title><?php echo $__env->yieldContent('titre'); ?> - LiinkArt</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/sweetalert2/dist/sweetalert2.min.css')); ?>">
    <!--Import Google Icon Font-->
    <?php echo Html::style("https://fonts.googleapis.com/icon?family=Material+Icons"); ?>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <?php echo $__env->yieldContent('css'); ?>

</head>
<body>
<section id="background-design">
    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 382 955" style="enable-background:new 0 0 382 955;" xml:space="preserve">
    <polygon fill="#E0AFD6" points="382,191 191,0 191,382 "/>
    <polygon fill="#D4E5D1" points="382,573 191,382 191,764 "/>
    <polygon fill="#E8CDE5" points="191,382 382,573 382,191 "/>
    <polygon fill="#D4DAE8" points="0,191 191,382 191,0 "/>
    <polygon fill="#C4E8D9" points="0,573 191,764 191,382 "/>
    <polygon fill="#E8EDDA" points="191,764 382,955 382,573 "/>
    </svg>
</section>
    <nav class="liinkart-medium z-depth-2">
        <div class="nav-wrapper">
            <a id="liinkart-logo" href="<?php echo e(url('/')); ?>" class="brand-logo">
                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 764 1146" style="enable-background:new 0 0 764 1146;" xml:space="preserve">
                    <polygon fill="#73A9C0" points="191,573 0,382 0,764 "/>
                    <polygon fill="#7670AE" points="382,382 191,191 191,573 "/>
                    <polygon fill="#8BAE87" points="382,764 191,573 191,955 "/>
                    <polygon fill="#7D7ABC" points="191,573 382,764 382,382 "/>
                    <polygon fill="#7B5B97" points="191,191 382,382 382,0 "/>
                    <polygon fill="#6D82B8" points="0,382 191,573 191,191 "/>
                    <polygon fill="#8BB6A6" points="0,764 191,955 191,573 "/>
                    <polygon fill="#AEC380" points="191,955 382,1146 382,764 "/>
                    <polygon fill="#D38450" points="573,573 764,764 764,382 "/>
                    <polygon fill="#F3A368" points="382,764 573,955 573,573 "/>
                    <polygon fill="#B55677" points="382,382 573,573 573,191 "/>
                    <polygon fill="#C97077" points="573,573 382,382 382,764 "/>
                    <polygon fill="#DBD175" points="573,955 382,764 382,1146 "/>
                    <polygon fill="#EAC76B" points="764,764 573,573 573,955 "/>
                    <polygon fill="#E06666" points="764,382 573,191 573,573 "/>
                    <polygon fill="#934782" points="573,191 382,0 382,382 "/>
                    <polyline fill="#FFFFFF" points="418,469.9 537,436 537,837 418,837 "/>
                    <polyline fill="#FFFFFF" points="346,469.9 227,436 227,837 346,837 "/>
                    <ellipse fill="#FFFFFF" cx="477.5" cy="336" rx="59.5" ry="56"/>
                    <ellipse fill="#FFFFFF" cx="286.5" cy="336" rx="59.5" ry="56"/>
                </svg>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">more_vert</i></a>
            <ul class="right hide-on-med-and-down">
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Se connecter</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Créer un compte</a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('/artworks/create')); ?>">Créer une oeuvre</a></li>
                    <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                            <img class="avatar" src="<?php echo e(asset('storage/uploads/avatars/' . Auth::user()->avatar)); ?>">
                            <?php echo e(Auth::user()->name); ?> <i class="material-icons right">apps</i>
                        </a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li>
                                <a href="<?php echo e(route('user.show', [auth()->user()->id])); ?>">Profil</a>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
            <ul class="side-nav" id="mobile-demo">
            <li><img src="<?php echo e(asset('/uploads/liinkart-logo-sidenav.png')); ?>"></li>
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>"><i class="material-icons">perm_identity</i>Se connecter</a></li>
                    <li><a href="<?php echo e(route('register')); ?>"><i class="material-icons">person_add</i>Créer un compte</a></li>
                <?php else: ?>
                    <li>
                        <div class="user-view">
                            <div class="user-background"><img src="<?php echo e(asset ('uploads/user-bg.jpg')); ?>"></div>
                        <img class="circle" src="<?php echo e(asset('storage/uploads/avatars/' . Auth::user()->avatar)); ?>">
                        <span class="white-text name"><?php echo e(Auth::user()->name); ?></span>
                        <span class="white-text email"><?php echo e(Auth::user()->email); ?></span>
                        </div>
                    </li>
                    <li><a href="<?php echo e(route('artworks.index')); ?>"><i class="material-icons">home</i>Accueil</a></li>
                    <li><a href="<?php echo e(route('user.show', [auth()->user()->id])); ?>"><i class="material-icons">face</i>Profil</a>
                    <li><a href="<?php echo e(url('/artworks/create')); ?>"><i class="material-icons">add</i>Créer une oeuvre</a></li>
                <?php endif; ?>
                    <li><div class="divider"></div></li>
                    <li><a class="text-lighten-3" href="<?php echo e(route('faq')); ?>"><i class="material-icons">help</i>Aide</a></li>
                    <li><a class="text-lighten-3" href="<?php echo e(url('contact')); ?>"><i class="material-icons">email</i>Nous contacter</a></li>
                <?php if(Auth::check()): ?>
                    <li><div class="divider"></div></li>
                    <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">close</i>Se déconnecter</a><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
     
    <script src=<?php echo e(asset('bower_components/sweetalert2/dist/sweetalert2.min.js')); ?>></script>

    <?php if(Session::has('achievement')): ?>
        <script type="text/javascript">
            swal({
                title: 'Hey !',
                text: 'Vous avez débloqué un nouveau badge: <?php echo e(Session::get('achievement')); ?>',
                type: 'success'
            });
        </script>
    <?php endif; ?>

    <?php if(Auth::user()): ?>
        <?php echo $__env->yieldContent('sidebar'); ?>
    <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>

<section id="background-design2">
    <?php echo $__env->make('layouts.background-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

    <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
    <!-- Scripts --> 
    <?php echo MaterializeCSS::include_full(); ?>


    <script src=<?php echo e(asset("js/script.js")); ?>></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>

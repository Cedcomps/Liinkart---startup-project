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
    <!--Import Google Icon Font-->
        <?php echo Html::style("https://fonts.googleapis.com/icon?family=Material+Icons"); ?>

    <!-- Compiled and minified CSS -->
        <?php echo Html::style("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css"); ?>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <img src="<?php echo e(asset('uploads/liinkart logo blanc_petit.png')); ?>" width="32px" height="48px" alt="liinkart logo white">
                <a href="<?php echo e(url('/')); ?>" class="brand-logo"> <?php echo e(config('app.name', 'Laravel')); ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(url('/artworks/create')); ?>">Créer un article</a></li>
                        <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                                <?php echo e(Auth::user()->name); ?> <i class="material-icons right">apps</i>
                            </a>
                            <ul id="dropdown1" class="dropdown-content">
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>        
    <?php if(Auth::user()): ?>
        <?php echo $__env->yieldContent('sidebar'); ?>
    <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    
    <footer>
       <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
    </footer>
    <!-- Scripts -->
    <!-- Compiled and minified JavaScript -->    
    <?php echo Html::script("//code.jquery.com/jquery-2.1.1.min.js"); ?>

    <?php echo Html::script("//cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"); ?>

    <script src=<?php echo e(asset("js/app.js")); ?>></script>


</body>
</html>

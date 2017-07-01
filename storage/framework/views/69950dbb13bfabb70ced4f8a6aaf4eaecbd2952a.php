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
    <div id="app">
        <nav id="navbar-fixed">
            <div class="nav-wrapper">
                <i class="material-icons right">apps</i>
                <a href="<?php echo e(url('/')); ?>" class="brand-logo"> <?php echo e(config('app.name', 'Laravel')); ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(url('/artworks/create')); ?>">Créer un article</a></li>
                        <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                                <?php echo e(Auth::user()->name); ?> <i class="material-icons right">more_vert</i>
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
        </nav><a href="#" data-activates="slide-out" class="show-on-large button-collapse">Side nav demo</a>
        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        
       
    </div>        

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

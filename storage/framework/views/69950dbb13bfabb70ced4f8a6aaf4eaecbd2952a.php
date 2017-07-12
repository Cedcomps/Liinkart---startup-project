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

    <?php echo $__env->yieldContent('css'); ?>

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<section id="background-design">
    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 382 955" style="enable-background:new 0 0 382 955;" xml:space="preserve">
    <style type="text/css">
        .back0{fill:#E0AFD6;}
        .back1{fill:#D4E5D1;}
        .back2{fill:#E8CDE5;}
        .back3{fill:#D4DAE8;}
        .back4{fill:#C4E8D9;}
        .back5{fill:#E8EDDA;}
    </style>
    <polygon class="back0" points="382,191 191,0 191,382 "/>
    <polygon class="back1" points="382,573 191,382 191,764 "/>
    <polygon class="back2" points="191,382 382,573 382,191 "/>
    <polygon class="back3" points="0,191 191,382 191,0 "/>
    <polygon class="back4" points="0,573 191,764 191,382 "/>
    <polygon class="back5" points="191,764 382,955 382,573 "/>
    </svg>
</section>
<div class="navbar-fixed">
    <nav class="liinkart-medium z-depth-2">
        <div class="nav-wrapper">
            <a id="liinkart-logo" href="<?php echo e(url('/')); ?>" class="brand-logo">
                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 764 1146" style="enable-background:new 0 0 764 1146;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#73A9C0;}
                        .st1{fill:#7670AE;}
                        .st2{fill:#8BAE87;}
                        .st3{fill:#7D7ABC;}
                        .st4{fill:#7B5B97;}
                        .st5{fill:#6D82B8;}
                        .st6{fill:#8BB6A6;}
                        .st7{fill:#AEC380;}
                        .st8{fill:#D38450;}
                        .st9{fill:#F3A368;}
                        .st10{fill:#B55677;}
                        .st11{fill:#C97077;}
                        .st12{fill:#DBD175;}
                        .st13{fill:#EAC76B;}
                        .st14{fill:#E06666;}
                        .st15{fill:#934782;}
                        .st16{fill:#FFFFFF;}
                    </style>
                    <polygon class="st0" points="191,573 0,382 0,764 "/>
                    <polygon class="st1" points="382,382 191,191 191,573 "/>
                    <polygon class="st2" points="382,764 191,573 191,955 "/>
                    <polygon class="st3" points="191,573 382,764 382,382 "/>
                    <polygon class="st4" points="191,191 382,382 382,0 "/>
                    <polygon class="st5" points="0,382 191,573 191,191 "/>
                    <polygon class="st6" points="0,764 191,955 191,573 "/>
                    <polygon class="st7" points="191,955 382,1146 382,764 "/>
                    <polygon class="st8" points="573,573 764,764 764,382 "/>
                    <polygon class="st9" points="382,764 573,955 573,573 "/>
                    <polygon class="st10" points="382,382 573,573 573,191 "/>
                    <polygon class="st11" points="573,573 382,382 382,764 "/>
                    <polygon class="st12" points="573,955 382,764 382,1146 "/>
                    <polygon class="st13" points="764,764 573,573 573,955 "/>
                    <polygon class="st14" points="764,382 573,191 573,573 "/>
                    <polygon class="st15" points="573,191 382,0 382,382 "/>
                    <polyline class="st16" points="418,469.9 537,436 537,837 418,837 "/>
                    <polyline class="st16" points="346,469.9 227,436 227,837 346,837 "/>
                    <ellipse class="st16" cx="477.5" cy="336" rx="59.5" ry="56"/>
                    <ellipse class="st16" cx="286.5" cy="336" rx="59.5" ry="56"/>
                    </svg>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('/artworks/create')); ?>">Créer un article</a></li>
                    <li><a href="#!" class="dropdown-button" data-activates="dropdown1">
                            <img class="avatar" src="<?php echo e(asset('storage/uploads/avatars/' . Auth::user()->avatar)); ?>">
                            <?php echo e(Auth::user()->name); ?> <i class="material-icons right">apps</i>
                        </a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li>
                                <a href="<?php echo e(route('user.show', [auth()->user()->id])); ?>">Profil</a>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
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
    <script src=<?php echo e(asset('bower_components/sweetalert2/dist/sweetalert2.min.js')); ?>></script>

    <?php if(Session::has('achievement')): ?>
    <script type="text/javascript">
        swal({
            title: 'Hey !',
            text: 'Vous avez débloqué "<?php echo e(Session::get('achievement')); ?>" Achievement',
            type: 'success'
        });
    </script>
    <?php endif; ?>
</div>  

    <?php if(Auth::user()): ?>
        <?php echo $__env->yieldContent('sidebar'); ?>
    <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>

<section>
    <div id="background-design2">
        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 2000 382" style="enable-background:new 0 0 2000 382;" xml:space="preserve">
        <style type="text/css">
            .bgb0{fill:#C9C7E5;}
            .bgb1{fill:#D8CCE5;}
            .bgb2{fill:#E8EFD5;}
            .bgb3{fill:#E2C5D0;}
            .bgb4{fill:#E8E4CD;}
            .bgb5{fill:#EDBEBE;}
            .bgb6{fill:#E0AFD6;}
        </style>
        <polygon class="bgb0" points="191,382 0,191 0,382 "/>
        <polygon class="bgb1" points="0,191 191,382 191,0 "/>
        <polygon class="bgb2" points="1616,382 1807,382 1807,191 "/>
        <polygon class="bgb3" points="191,382 382,382 382,191 "/>
        <polygon class="bgb4" points="1998,382 1807,191 1807,382 "/>
        <polygon class="bgb5" points="573,382 382,191 382,382 "/>
        <polygon class="bgb6" points="382,191 191,0 191,382 "/>
        </svg>
    </div>  
</section>

    <?php echo $__env->make('layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
    <!-- Scripts --> 
    <?php echo MaterializeCSS::include_full(); ?>


    <script src=<?php echo e(asset("js/script.js")); ?>></script>
</body>
</html>

<?php $__env->startComponent('mail::message'); ?>
# Bonjour <?php echo e($post->user->name); ?>,
Ceci est un message de modération concernant votre oeuvre **<?php echo e($post->titre); ?>**

Elle ne respecte malheureusement pas nos [règles de diffusion](/faq) imposées à nos utilisateurs, de ce fait votre annonce a malheureusement été supprimée.
<br>Nous vous invitons à créer une nouvelle annonce.
<?php $__env->startComponent('mail::button', ['url' => '/artworks/create']); ?>
Créer une nouvelle oeuvre
<?php echo $__env->renderComponent(); ?>

Merci de votre compréhension,<br>
Cédric de <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
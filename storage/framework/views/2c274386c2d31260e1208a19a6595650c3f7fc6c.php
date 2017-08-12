<?php $__env->startComponent('mail::message'); ?>
# Bonjour,
Vous venez de recevoir une nouvelle proposition d'achat concernant votre oeuvre d'art **<?php echo e($thread->subject); ?>.**

 <?php $__env->startComponent('mail::panel'); ?>
<p style="text-align: center;">
<strong><?php echo e($thread->creator()->name); ?></strong> vous propose <strong><?php echo e($thread->latestMessage->price); ?> €</strong>
</p>
<?php echo $__env->renderComponent(); ?>
Vous pouvez dès à présent lui répondre en cliquant ci-dessous.
<?php $__env->startComponent('mail::button', ['url' => '/messages/']); ?>
Répondre à cette offre
<?php echo $__env->renderComponent(); ?>

Merci de votre confiance,<br>
Cédric de <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?> 
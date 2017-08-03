<?php $__env->startComponent('mail::message'); ?>
# Bonjour <?php echo e($post->user->name); ?>,
Vous venez de recevoir une nouvelle proposition d'achat concernant votre oeuvre d'art **<?php echo e($post->titre); ?>.**

<?php $__env->startComponent('mail::panel'); ?>
<p style="text-align: center;">
<strong><?php echo e($user->name); ?></strong> vous propose <strong><?php echo e($price); ?> €</strong>
</p>
<?php echo $__env->renderComponent(); ?>
Vous pouvez dès à présent lui répondre en cliquant ci-dessous.
<?php $__env->startComponent('mail::button', ['url' => '<?php echo $user->email; ?>']); ?>
Répondre à cette offre
<?php echo $__env->renderComponent(); ?>

Merci de votre confiance,<br>
Cédric de <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('mail::message'); ?>
# Bonjour, 
une demande d'ajout au [Slack de LiinkART](https://liinkart.slack.com/) vient d'arriver, invitez l'adresse ci-dessous.

<?php $__env->startComponent('mail::panel'); ?>
**<?php echo e($slack['email']); ?>**
<?php echo $__env->renderComponent(); ?>

Merci,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
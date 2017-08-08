<h5>Ecrivez un message...</h5>
<form action="<?php echo e(route('messages.update', $thread->id)); ?>" method="post">
    <?php echo e(method_field('put')); ?>

    <?php echo e(csrf_field()); ?>

        
    <!-- Message Form Input -->
    <div class="input-field col s12">
            <textarea name="message" placeholder="Formulez votre demande à l'artiste" class="materialize-textarea"><?php echo e(old('message')); ?></textarea>
            <label for="message">Message</label>
    </div>


    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Envoyez</button>
    </div>
</form>
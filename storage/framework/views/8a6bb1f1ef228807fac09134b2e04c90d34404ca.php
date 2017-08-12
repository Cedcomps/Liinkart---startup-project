<form action="#" method="put">
    <?php echo e(method_field('put')); ?>

    <?php echo e(csrf_field()); ?>

        
    <!-- Message Form Input -->
    <div class="input-field col s12">
            <label for="message">Message</label>
            <textarea id="new-message" name="message" placeholder="Ecrivez un message..." class="materialize-textarea"></textarea>
    </div>

<input type="hidden" class="range" name="price" value="<?php echo e($thread->latestMessage->price); ?>"/>
    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Envoyez</button>
    </div>
</form>

<?php if(Auth::check()): ?>
<script>
    var token = '<?php echo e(Session::token()); ?>';
    var userId = '<?php echo e(Auth::user()->id); ?>';
    var threadId = '<?php echo e($thread->id); ?>';
    var urlPutMessage = '<?php echo e(route('messages.update')); ?>';
</script>
<?php endif; ?>
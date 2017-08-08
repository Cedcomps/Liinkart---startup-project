<?php $__env->startSection('content'); ?>
    <h1>Create a new message</h1>
    <form action="<?php echo e(route('messages.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                       value="<?php echo e(old('subject')); ?>">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control"><?php echo e(old('message')); ?></textarea>
            </div>

           
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
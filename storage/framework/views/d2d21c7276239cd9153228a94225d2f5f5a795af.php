<form action="<?php echo e(route('messages.store')); ?>" method="post" class="col s12">
    <?php echo e(csrf_field()); ?>

    <div class="row">
        <!-- Subject Form Input -->
            <?php if(Auth::check()): ?>
            <input type="hidden" class="form-control" name="subject" value="Nouvelle proposition de <?php echo e(Auth::user()->name); ?>">
            <?php endif; ?>
            <input type="hidden" name="recipients" value="<?php echo e($post->user->id); ?>">
            <label for="price">Montant de la proposition</label>
        <div class="input-field col s6">
        <p class="range-field">
            <input type="range" name="price" class="range" id="test5" min="40" max="2500" />
        </p>   
        </div>
        <div class="input-field col s6">
            <h3 class="proposition"><output name="result">--</output></h3>
        </div>
        <!-- Message Form Input -->
        <div class="input-field col s12">
            <textarea name="message" placeholder="Formulez votre demande à l'artiste" class="materialize-textarea"><?php echo e(old('message')); ?></textarea>
            <label for="message">Message</label>
        </div>
        <p>Et n'oubliez pas une chose : la vente peut s'avérer être une véritable surprise pour les amoureux de l'Art !</p>
        <span class="center-align">
        

        <!-- Submit Form Input -->
        <a class="cancel z-depth-3 waves-effect modal-close waves-light btn-danger btn-large red darken-1 left"><i class="material-icons left">cancel</i>ANNULER</a>
        <button type="submit" class="z-depth-3 waves-effect waves-light btn-large right"><i " class="zoom-gavel material-icons left">gavel</i>FAIRE UNE OFFRE</button>
        </span>
    </div>
</form>
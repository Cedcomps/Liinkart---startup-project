<div class="row">
	<div class="col s12">
        <h3 class="align-center">Modération des oeuvres signalées</h3>
            <table class="table highlight responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Oeuvre</th>
                    <th>Photos</th>
                    <th>Description</th>
                    <th>Auteur</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            
            
            <?php $__currentLoopData = $posts->where('revision', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
	               <tr>
	                    <td><?php echo $post->id; ?></td>
	                    <td class=""><strong><?php echo $post->titre; ?></strong></td>
	                    <td style="display: inline-flex;">
                    	<?php $__currentLoopData = $post->posts_photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts_photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a href="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>" data-standard="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>">
								<img class="responsive-img" src="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>"  alt="photos de l'oeuvre d'art liinkart">
							</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	                    </td>
	                    <td><?php echo $post->contenu; ?></td>
	                    <td><?php echo $post->user->name; ?></td>
	                    <td><?php echo link_to_route('artworks.show', 'Voir', [$post->id], ['class' => 'btn']); ?></td><
	                    <td>
	                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['dashboard.destroy', $post->id]]); ?>

	                            <?php echo Form::submit('Supprimer', ['class' => 'btn', 'onclick' => 'return confirm(\'Vraiment supprimer ce post?\')']); ?>

	                        <?php echo Form::close(); ?>

	                    </td>
	                </tr>
             
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
	
<?php $__env->startSection('titre'); ?>
	<?php echo e(ucfirst($post->titre)); ?> de <?php echo e($post->user->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
   <link href="<?php echo e(asset('bower_components/easyzoom/css/easyzoom.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="header-page gradient--bloody">
	<div class="row">
    <div class="section"></div>
		<div class="col s12 center">
        	<h1><?php echo e(ucfirst($post->titre)); ?></h1>
        	<span class="white-text">Mise en ligne le <?php echo e($post->created_at->format('d/m/Y')); ?> et se termine d'ici <?php echo e($post->created_at->addDays(30)->diffForHumans(null, true)); ?></span>
	    </div>
	</div>
</section>	
	<div class="container">
		<div class="row artwork-article">
			<div class="col s12">
				<div class="col l6 s12 artwork-image-first">
				<?php if(count($post->posts_photos)): ?>
					<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails is-ready">
					    <a href="<?php echo e(asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)); ?>">
						 	<img class="responsive-img" src=" <?php echo e(asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)); ?>" alt="oeuvre d'art liinkart">
					    </a>
					</div>
				<?php endif; ?>
				<ul class="thumbnails">
			        <?php $__currentLoopData = $post->posts_photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts_photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>" data-standard="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>">
								<img src="<?php echo e(asset('storage/uploads/artworks/' . $posts_photo->filename)); ?>" width="30%" height="30%" alt="photos de l'oeuvre d'art liinkart">
							</a>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</ul>
				</div>
				<div class="col l6 s12">
					
					<br>
					<div class="section">
						<div class="card-panel"><h3>Description de l'oeuvre</h3>
						<p><?php echo e($post->contenu); ?></p>
						<div class="section"></div>
						<h5>Technique</h5>
							<span class="chip-technique">
								<?php if(isset($post->category)): ?>
		                            <?php echo e($post->category->category); ?>

		                        <?php endif; ?>
	                        </span>
	                        <div class="section"></div>
	                        <h5>Dimensions</h5>
									<?php if(!empty($post->largeur)): ?>
										Largeur: <?php echo e($post->largeur); ?>cm<br>
									<?php endif; ?>
									<?php if(!empty($post->longueur)): ?>
										Longueur: <?php echo e($post->longueur); ?>cm<br>
									<?php endif; ?>
									<?php if(!empty($post->hauteur)): ?>
										Hauteur: <?php echo e($post->hauteur); ?>cm
									<?php endif; ?>
									<?php if(empty($post->largeur) AND empty($post->longueur) AND empty($post->hauteur)): ?>
									<p>Non renseignées</p>
									<?php endif; ?>
	                        <div class="section"></div>
							<h5>Détails sur l'artiste</h5>
							<div class="valign-wrapper">
		                        <div class="col s2">
		                            <a href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>"><img src="<?php if(filter_var($post->user->avatar, FILTER_VALIDATE_URL)): ?> <?php echo e($post->user->avatar); ?>

		                                <?php else: ?> <?php echo e(asset('storage/uploads/avatars/' . $post->user->avatar)); ?>

		                                <?php endif; ?>" alt="avatar artiste" class="circle responsive-img"></a>
		                        </div>
		                        <div class="col s10">
		                            <a class="black-text" href="<?php echo e(route('user.show', ['id' => $post->user->id])); ?>"><h4><?php echo e(isset($post->user->name) ? $post->user->name : "Artiste"); ?></h4></a>
		                            <div class="chip"><?php echo e($post->user->specialist); ?></div>
		                            <?php if($post->user->likes()->first()): ?>
	                                <span>
	                                    <i class="justlike tiny material-icons">favorite</i>
	                                    <span class="countLike"><?php echo e($post->user->likes()->count()); ?></span>
	                                </span>
	                                <?php endif; ?>    
		                            <p><?php echo e($post->user->country); ?></p><br>
		                        </div>
		                    </div>  
                    		<div class="section"></div>
							<div class="col s4 center">
								<a class="tooltipped waves-effect icone-artwork" target=_blank href="<?php echo e(route('certificat.pdf',$post)); ?>"" data-position="bottom" data-delay="50" data-tooltip="Télécharger le certificat d'authenticité"><img src="<?php echo e(asset('uploads/achievement/Certificat d\'authenticité créé.png')); ?>" alt="certificat d'authenticité liinkart"></a>
							</div>
							<div class="col s4 center">
								<a class="tooltipped waves-effect icone-artwork" data-position="bottom" data-delay="50" data-tooltip="Signaler à la modération?" href="<?php echo e(route('artworks.revision',$post)); ?>" onclick="event.preventDefault(); document.getElementById('revision').submit();"><img src="<?php echo e(asset('uploads/achievement/Signaler moderation.png')); ?>" alt="Signalement modération liinkart"></a>
                                <form id="revision" action="<?php echo e(route('artworks.revision',$post)); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
							</div>
							<div class="col s4 center">
								<span class="right-align"><a class="tooltipped waves-effect icone-artwork" data-position="bottom" data-delay="50" data-tooltip="Proposez votre offre" href="#modal1"><img src="<?php echo e(asset('uploads/achievement/Proposez votre offre.png')); ?>" alt="Signalement modération liinkart"></a></span><br>
								
								<div id="modal1" class="modal">
								    <div class="modal-content">
								    	<h2>Proposez votre offre</h2>
								    	<blockquote>
								    			Rappel
											  	<p class="subheading">La vente aux enchères à l'aveugle a un but bien précis et il est bon de vous rappeler pourquoi Afin d'éviter une offre farfelue, nous imposons une fourchette minimale concernant la proposition. De ce fait, vous pourrez estimer la valeur d'une oeuvre en toute intégrité. En effet certains composants et outils nécessaires à la création peuvent parfois être onéreux selon l'oeuvre à créer...</p>
						    			</blockquote>
								    	<p>Une fois la proposition envoyée, vous serez avertis de la réponse de l'artiste par email.</p> 
								    	<?php echo $__env->make('messenger.partials.proposition', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								    	
								    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="section"></div>
					
				</div>  
            </div>	
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('bower_components/easyzoom/src/easyzoom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/artwork.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
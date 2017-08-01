<?php $__env->startSection('titre'); ?>
    A propos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section class="header-page gradient--sunset">
	<div class="row">
    <div class="section"></div>
		<div class="col s12 center">
        	<h1>Le concept</h1>
	    </div>
	</div>
</section>

<div class="container center">
	<div class="row">
	    <div class="col s12 offset-m4 m4">
			<img class="responsive-img weblogo" src="<?php echo e(asset ('uploads/weblogo/liinkart-idea.png')); ?>" alt="idée de liinkart">
	    </div>
        <div class="col s12">
            <div class="section">
                <h2>Un problème = une solution !</h2><br>
                <p>Né du constat que 80% des amateurs d'art souhaiteraient diffuser leurs oeuvres, mais que les portes des galeries d'Art leur sont fermées, nous avons pour objectif de démocratiser le marché de l’art en ligne en simplifiant les processus de mise en relation entre artistes et amateurs d’arts du monde entier.</p>
            </div>
        </div>
    </div> 
    <div class="divider"></div>
    <div class="row">
	    <div class="col s12 m6 l6">
			<img class="responsive-img weblogo" src="<?php echo e(asset ('uploads/weblogo/logo-reco.png')); ?>" alt="Avantage de liinkart">     
            <div class="section">
                <h3>Pour les artistes</h3><br>
                <p>Dans un milieu de l'art extrêmement compétitif, où il est difficile d'être diffusé et reconnu; LiinkART facilite la génération de revenus en augmentant votre visibilité ainsi que votre notoriété.</p>
            </div>
        </div>
	    <div class="col s12 m6 l6">
			<img class="responsive-img weblogo" src="<?php echo e(asset ('uploads/weblogo/logo-money.png')); ?>" alt="Bénéfice de liinkart">
            <div class="section">
                <h3>Pour les acheteurs</h3><br>
                <p>Découvrez de nouveaux talents en estimant vous-même les oeuvres exposées. Investissez dans un bénéfice émotionnel à votre portée.</p>
            </div>
        </div>
    </div>
    <div class="divider"></div>
     <div class="row">
	    <div class="col s12 offset-m4 m4">
			<img class="responsive-img weblogo" src="<?php echo e(asset ('uploads/weblogo/logo-works.png')); ?>" alt="Fonctionnement liinkart">
	    </div>
        <div class="col s12 offset-m2 m8">
            <div class="section">
                <h3>Comment ça marche ?</h3><br>
                <p>Toute personne peut librement poster une oeuvre d'art durant un certain laps de temps. Si l'oeuvre ne trouve pas d'acquéreur durant cette période, l'annonce sera supprimée afin de fluidifier la galerie web. Si une oeuvre vous intéresse, il suffit de lancer une proposition à l'artiste. Libre à lui d'accepter ou de décliner votre offre. LiinkART met en place un certificat d'authenticité disponible pour chacune des oeuvres créées sur le site. <br>                <br><em>Prochainement un algorythme sera mis en place afin de faire monter la cote d'un artiste, selon que les oeuvres présentées plaisent ou non à la communauté. Le tout dans le but de démarquer certains talents, et d'en faire profiter les amoureux de l'Art !</em><br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 offset-m2 m8 offset-l3 l6">
            <div class="card-panel">
            <div class="section">
                <h3>Et la suite ?</h3><br>
                <img class="responsive-img weblogo" src="<?php echo e(asset ('uploads/weblogo/liinkart-next.png')); ?>" alt="Suite de liinkart">
                <p>LiinkART souhaite aussi créer des événements de type "tremplin" afin de permettre à chacun d’exposer son talent à travers la création de concours web ainsi que d’événements géolocalisés dans des lieux atypiques.<br><em>A venir</em></p>
            </div>
        </div></div>
    </div>
    <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
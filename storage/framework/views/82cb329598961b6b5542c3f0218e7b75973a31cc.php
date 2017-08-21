<?php $__env->startSection('titre'); ?>
    La plateforme qui démocratise l'art en ligne
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header>
    <div class="row center">
        <h1>Découvrez les talents artistiques de demain
        <br>en estimant leurs oeuvres
        </h1>
        <a class="waves-effect waves-light btn-large" href="<?php echo e(route('artworks.index')); ?>">TROUVER UNE OEUVRE</a>
        <a class="waves-effect waves-light btn-large" href="<?php echo e(route('artworks.create')); ?>">POSTER UNE OEUVRE</a>
    </div>
</header>
<span id="liinkart">
   <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 764 1146" style="enable-background:new 0 0 764 1146;" xml:space="preserve">
        <polygon fill="#73A9C0" points="191,573 0,382 0,764 "/>
        <polygon fill="#7670AE" points="382,382 191,191 191,573 "/>
        <polygon fill="#8BAE87" points="382,764 191,573 191,955 "/>
        <polygon fill="#7D7ABC" points="191,573 382,764 382,382 "/>
        <polygon fill="#7B5B97" points="191,191 382,382 382,0 "/>
        <polygon fill="#6D82B8" points="0,382 191,573 191,191 "/>
        <polygon fill="#8BB6A6" points="0,764 191,955 191,573 "/>
        <polygon fill="#AEC380" points="191,955 382,1146 382,764 "/>
        <polygon fill="#D38450" points="573,573 764,764 764,382 "/>
        <polygon fill="#F3A368" points="382,764 573,955 573,573 "/>
        <polygon fill="#B55677" points="382,382 573,573 573,191 "/>
        <polygon fill="#C97077" points="573,573 382,382 382,764 "/>
        <polygon fill="#DBD175" points="573,955 382,764 382,1146 "/>
        <polygon fill="#EAC76B" points="764,764 573,573 573,955 "/>
        <polygon fill="#E06666" points="764,382 573,191 573,573 "/>
        <polygon fill="#934782" points="573,191 382,0 382,382 "/>
        <polyline fill="#FFFFFF" points="418,469.9 537,436 537,837 418,837 "/>
        <polyline fill="#FFFFFF" points="346,469.9 227,436 227,837 346,837 "/>
        <ellipse fill="#FFFFFF" cx="477.5" cy="336" rx="59.5" ry="56"/>
        <ellipse fill="#FFFFFF" cx="286.5" cy="336" rx="59.5" ry="56"/>
    </svg>
</span>
<section>
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <img class="responsive-img" src="<?php echo e(asset ('uploads/mockup artiste.png')); ?>" alt="artiste mockup liinkart">
            </div>
            <div class="col s12 m6 mockup">
                <div class="section center">
                    <h2>Vous êtes Artiste ?</h2>
                    <h3 class="light">C'est vous qui exposez votre talent</h3>
                    <p>Vous devenez exposant dans le monde entier grâce à notre galerie d'art virtuelle. Vos oeuvres sont présentées sur notre plateforme et peuvent être achetées à tout moment.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="end-section">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 mockup">
                <div class="section center">
                    <h2>Vous êtes Acheteur ?</h2>
                    <h3 class="light">C'est vous qui devenez l'expert</h3>
                    <p>Vous estimez les oeuvres des artistes et proposez un tarif afin d'acquérir leurs oeuvres exposées en ligne. Investir dans un bénéfice émotionnel est enfin à votre portée.</p>
                </div>
            </div>
            <div class="col s12 m6 mockup2">
                <img class="responsive-img" src="<?php echo e(asset ('uploads/mockup acheteur.png')); ?>" alt="acheteur mockup liinkart">
            </div>
        </div>
    </div>
</section>
<section class="reference">
    <h3 class="light center">Quelques références</h3>
    <div class="container reference">
        <div class="row">
            <div class="col s12 m4">
                <div class="card-panel">
                    <div class="center">
                        <a href="http://www.lafrenchtech.com/"><img class="responsive-img partenaire" src="<?php echo e(asset ('uploads/weblogo/FrenchTech.png')); ?>" alt="french tech liinkart"></a>
                        <h4 class="light">French Tech</h4>
                        <p class="center">Estampillé "French Tech" : cela désigne tous ceux qui travaillent dans ou pour les start-ups françaises en France ou à l’étranger. LiinkART en fait partie</p>
                    </div> 
                </div>  
            </div>
            <div class="col s12 m4">
                <div class="card-panel">
                    <div class="center">
                        <a href="https://startupweekend.org/"><img class="responsive-img partenaire" src="<?php echo e(asset ('uploads/weblogo/StartupWeekend.jpg')); ?>" alt="startup weekend liinkart"></a>
                        <h4 class="light">Startup Weekend</h4>
                        <p class="center">LiinkART s'est illustré au premier Startup Weekend de Metz, dont elle a remportée le premier prix. Une expérience très enrichissante</p>
                    </div>   
                </div>
            </div>        
            <div class="col s12 m4">
                <div class="card-panel">
                    <div class="center">
                        <a href="http://www.lorntech.eu"><img class="responsive-img partenaire" src="<?php echo e(asset ('uploads/weblogo/lorntech.jpg')); ?>" alt="lorntech liinkart"></a>
                        <h4 class="light">LORnTECH</h4>
                        <p class="center">Le LORnTECH fait partie des 13 établissements labelisés French Tech En France et c'est ici qu'est né et se développe LiinkART.</p>
                    </div>  
                </div> 
            </div>
        </div> 
    </div>
</section>
<section class="end-section">
    <div class="row">
        <div class="container">
            <div class="col s12 m6 center">
                <i class="material-icons">question_answer</i>
                <h4 class="light">Questions?</h4>
                <p class="subheading">Consultez les <a href="<?php echo e(route('faq')); ?>">FAQ</a>.</p>
            </div>
            <div class="col s12 m6 center">
                <i class="material-icons">contact_mail</i>
                <h4 class="light">Besoin d'un support?</h4>
                <p class="subheading">Accédez au <a href="<?php echo e(url('contact')); ?>">Centre d'aide de LiinkART</a>.</p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
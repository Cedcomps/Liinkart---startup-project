<footer class="page-footer liinkart-medium">
  <div class="container">
    <div class="row">
      <div class="col l5 m6 s12">
      <div class="valign-wrapper">
        <img src="{{ asset('uploads/liinkart_logo_blanc_petit.png')}}" width="32" height="48" alt="liinkart logo white">
        <h5 class="white-text" style="display: inline-flex; ">&nbsp;LiinkART</h5>
        </div>
        <p class="grey-text text-lighten-4" style="margin-top: 5px;">Nous mettons en relation les amoureux de l'Art et les talents de demain - Laissez quelqu'un évaluer votre art, il peut valoir plus que ce que vous ne l'imaginiez !</p>
        <a href="https://www.facebook.com/Liinkart/" target="_blank"><img src="{{ asset('uploads/facebook.png')}}" alt="facebook logo"></a>
      </div>
      <div class="col l5 m6 s12">
        <h5 class="white-text">Rejoignez-nous</h5>
        <p class="grey-text text-lighten-4">Une idée, une proposition? Votre avis nous intéresse car vous êtes au coeur de notre réflexion</p>
        <a class="waves-effect waves-light btn" href="{{ url('contact') }}">CONTACT</a>
      </div>
      <div class="col l2 m3 s12 hide-on-med-and-down">
        <h5 class="white-text">A propos</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ route('about') }}">Le concept</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('press') }}">Presse</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('donation') }}">Faire un don</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('faq') }}">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Tous droits réservés - 2016 - {{ Carbon\Carbon::now()->year }} LiinkART 
      <span class="right hide-on-small-only">
        <a class="grey-text text-lighten-4" href="https://cedeev.com">Réalisé par CeDeeV - </a>
        <a class="grey-text text-lighten-4" href="{{ route('mentions')}}">Mentions légales</a>
      </span>
    </div>
  </div>
</footer>
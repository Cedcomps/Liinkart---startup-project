<footer class="page-footer liinkart-medium">
  <div class="container">
    <div class="row">
      <div class="col l5 m6 s12">
      <div class="valign-wrapper">
        <img src="{{ asset('uploads/liinkart logo blanc_petit.png')}}" width="32px" height="48px" alt="liinkart logo white">
        <h5 class="white-text" style="display: inline-flex; ">&nbsp;LiinkART</h5>
        </div>
        <p class="grey-text text-lighten-4" style="margin-top: 5px;">Nous mettons en relation les amoureux de l'Art et les talents de demain - Laissez quelqu'un évaluer votre art, il peut valoir plus que ce que vous ne l'imaginiez !</p>
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
          <li><a class="grey-text text-lighten-3" href="{{ route('team') }}">L'équipe</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('faq') }}">FAQ</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('press') }}">Presse</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    2016 - {{ Carbon\Carbon::now()->year }} LiinkArt 
      <span class="right hide-on-small-only">
        <a class="grey-text text-lighten-4" href="https://cedeev.com">Réalisé par CeDeeV - </a>
        <a class="grey-text text-lighten-4" href="{{ route('mentions')}}">Mentions légales</a>
      </span>
    </div>
  </div>
</footer>
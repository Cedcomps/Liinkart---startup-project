@extends('layouts.app')
@section('titre')
    Demande de contact envoyée
@endsection
@section('content')
<section class="reference">
  <div class="container">
    <div class="row">
      <div class="col s12 center">

          <h1 class="light">Demande envoyée au staff</h1>
        
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>

            <div class="spinner-layer spinner-red">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>

            <div class="spinner-layer spinner-yellow">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>

            <div class="spinner-layer spinner-green">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        <p>Votre message a bien été transmis à notre équipe. Nous vous répondrons d'ici 48h jour ouvré. <br>En attendant si vous le souhaitez, vous pouvez visualiser notre <a href="{{ route('faq') }}">FAQ </a> ou vous connectez sur notre <a href="https://liinkart.slack.com/">#Slack</a>.</p>
        <br><br>
        <a class="waves-effect waves-light btn-large" href="{{ route('artworks.index')}}">RETOURNER DANS LA GALERIE</a>
      </div>
    </div>
  </div>
</section>
@endsection
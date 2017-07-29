@extends('layouts.app')
@section('titre')
    Dernières oeuvres d'art postées
@endsection
@section('content')
<section class="header-page gradient--pink">
    <div class="row">
    <div class="section"></div>
        <div class="col s12 center">
            <h1>Recherche</h1>
        </div>
    </div>
</section>
    <div class="container">   
        @if(isset($info))
            <div class="row">{{ $info }}</div>
        @endif
        <div class="row">
            <section class="liste-pagination">
                @include('artworks.liste')
            </section>  
        </div>
    </div>
@endsection
@section('js')
    <script src={{ asset("js/paginationAjax.js") }}></script>
@endsection
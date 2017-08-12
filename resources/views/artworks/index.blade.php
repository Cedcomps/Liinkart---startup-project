@extends('layouts.app')
@section('titre')
    Dernières oeuvres d'art postées
@endsection
@section('content')
<section class="header-page gradient--pink">
    <div class="row">
    <div class="section"></div>
    <div class="section"></div>
        <div class="col s12">
            <div class="row">
                <div class="z-depth-5 col s12 offset-m3 m6 input-field" style="background-color: white;">
                    <i class="material-icons prefix search-prefix">search</i>
                    <input type="text" name="searchCat" id="searchCat" placeholder="Rechercher l'oeuvre qui me fera vibrer">
                </div>
            </div>
        <div class="section"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src={{ asset("js/autosearch.js") }}></script>
@endsection
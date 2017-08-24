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
            @if(isset($info))
                <div class="center row">{{ $info }}</div>
            @endif
            <div class="row">
                <div class="z-depth-5 col s12 offset-m3 m6 input-field" style="background-color: white;">
                {!!Form::open(['route' => 'search','method' => 'GET'])!!}
                {{Form::token()}}
                    <i class="material-icons prefix search-prefix">search</i>
                    {{Form::text('searchCat',$value = null, ['placeholder' => "Rechercher l'oeuvre qui me fera vibrer", 'id' => 'searchCat'])}}
                {!! Form::close() !!}
                </div>
            </div>
        <div class="section"></div>
        </div>
    </div>
</section>
    {{-- <div class="container">    --}}
        <div class="row">
            <span style="text-align: center;">{{ $posts->links() }}</span>
            <section class="grid">
                @include('artworks.liste')
            </section>  
            <span style="text-align: center;">{{ $posts->links() }}</span>
        </div>
    {{-- </div> --}}
@endsection
@section('js')
<script src={{ asset("js/masonry.pkgd.min.js") }}></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript">
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 0,
        isFitWidth: true,
        gutter: 30
        });
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });
</script>
@endsection
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
            {{ $posts->links() }}
            <section class="grid">
                @include('artworks.liste')
            </section>  
            {{ $posts->links() }}
        </div>
    {{-- </div> --}}
@endsection
@section('js')
<script src={{ asset("js/masonry.pkgd.min.js") }}></script>
<script type="text/javascript">
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 0,
        isFitWidth: true,
        gutter: 30
    });
</script>
@endsection
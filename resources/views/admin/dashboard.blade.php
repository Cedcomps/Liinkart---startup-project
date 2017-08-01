@extends('layouts.app')
@section('titre')
	Administration
@endsection
@section('content')
<div class="row">
    <div class="col s12">
        <ul class="tabs tabs-fixed-width">
            <li class="tab col s3"><a class="active" href="#admin">Administration</a></li>
            <li class="tab col s3"><a href="#utilisateurs">Utilisateurs</a></li>
            <li class="tab col s3 disabled"><a href="#payement">Payements</a></li>
            <li class="tab col s3"><a href="#artworks">Oeuvres en ligne</a></li>
        </ul>
    </div>
    <div id="admin" class="col s12">
        @include('admin.admin')
    </div>
    <div id="utilisateurs" class="col s12">
        <section class="liste-pagination">
            @include('admin.user')
        </section>
    </div>
    <div id="payement" class="col s12">@include('admin.payement')</div>
    <div id="artworks" class="col s12">
        <section class="liste-pagination">
            @include('admin.artworks')
        </section>
    </div>
</div>
    
@endsection
@section('js')
<script src={{ asset("js/paginationAjax.js") }}></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>
@endsection


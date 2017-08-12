@extends('layouts.app')
@section('titre')
    Messagerie
@endsection
@section('content')
    @include('messenger.partials.flash')
    <div class="section"></div>
    <div class="section"></div>
	<h3 class="center">Messagerie</h3 class="center">
	<p class="center">Retrouvez ici les propositions et échanges pour les oeuvres en cours</p>
    <div class="section"></div>
<div class="row">
	<div class="col s12 offset-m2 m8">
    <div class="divider"></div>
	    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
	</div>
</div>
@stop
@extends('layouts.app')
@section('titre')
    Messagerie
@endsection
@section('content')
    @include('messenger.partials.flash')
<div class="row">
	<div class="col s12 offset-m1 m10">
	    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
	</div>
</div>
@stop
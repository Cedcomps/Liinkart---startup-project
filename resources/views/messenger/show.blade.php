@extends('layouts.app')
@section('titre')
    Messages 
@endsection
@section('content')
<div class="row">
    <div class="col s12 offset-l2 l8 msg-conversation">
		<div class="card">
			<div class="card-content"">
		        <h4 class="center">{{ucfirst( $thread->subject) }}</h4>
		        @if($thread->latestMessage->price)
		            <div class="chip center" style="display: table; margin: auto;">
		                Offre à {{ $thread->latestMessage->price }} €
		            </div>
		        @endif
		        <div class="section"></div>
		        <div class="divider"></div>
		        <div class="section"></div>
		        @each('messenger.partials.messages', $thread->messages, 'message')
				<div class="section"></div>
		        @include('messenger.partials.form-message')
		    </div>
	    </div>
    </div>
</div>
@endsection
@section('js')
	<script src="{{ asset('js/messenger.js') }}"></script>
@endsection
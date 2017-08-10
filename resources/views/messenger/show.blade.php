@extends('layouts.app')
@section('titre')
    Messages 
@endsection
@section('content')
<div class="row">
    <div class="col s12 offset-l2 l8 msg-conversation">
		<div class="card">
			<div class="card-content"">
		        <h4 class="center">{{ $thread->subject }}</h4>
		        <div class="divider"></div>
		        @each('messenger.partials.messages', $thread->messages, 'message')

		        @include('messenger.partials.form-message')
		    </div>
	    </div>
    </div>
</div>
@endsection
@section('js')
	<script src="{{ asset('js/messenger.js') }}"></script>
@endsection
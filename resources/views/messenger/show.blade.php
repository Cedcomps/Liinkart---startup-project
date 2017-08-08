@extends('layouts.app')
@section('titre')
    Messages 
@endsection
@section('content')
    <div class="col m6">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
@stop

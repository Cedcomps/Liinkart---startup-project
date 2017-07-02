@extends('layouts.app')

@section('content')
	<h1>{{ $post->id }}</h1>

	<h2>{{ $post->title}}</h2>

	<p>{{ $post->contenu }}</p>
@endsection
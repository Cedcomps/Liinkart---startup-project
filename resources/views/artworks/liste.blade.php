@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row">
            @if(isset($info))
                <div class="row">{{ $info }}</div>
            @endif
            {!! $posts->links() !!}
            @foreach($posts as $post)
                <div class="artworks col s12 m6 l4" data-postid="{{ $post->id }}">
                    <div class="card hoverable sticky-action">
                        <div class="card-content">
                            <div class="valign-wrapper">
                                <div class="col s2">
                                    <a href="{{ route('user.show', ['id' => $post->user->id]) }}"><img src=" {{ asset('storage/uploads/avatars/' . $post->user->avatar) }}" alt="avatar artiste" class="circle responsive-img"></a>
                                </div>
                                <div class="col s10">
                                    <a class="black-text" href="{{ route('user.show', ['id' => $post->user->id]) }}">By {{ $post->user->name or "Artiste"}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset ('uploads/office.jpg')}}">
                        </div>
                        <div class=" card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $post->titre }}<i class="material-icons right">more_vert</i></span>
                            <span class="chip-technique left-align">
                                @if (isset($post->category))
                                {{ $post->category->category }}
                                @endif
                            </span>
                            <span class="time-ago">{{ $post->created_at->diffForHumans() }} </span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $post->titre }}<i class="material-icons right">close</i></span>
                            <p>{{ $post->contenu }}</p>
                            @foreach($post->tags as $tag)
                                <a href="{{ url('artworks/tag/' . $tag->tag_url) }}" class="chip">{{ $tag->tag }}</a></li>
                            @endforeach
                        </div>
                        <div class="card-action">
                            <a href="{{ route('artworks.show', ['id' => $post]) }}" class="right-align">VOIR EN DETAILS</a>
                        </div>
                    </div>  
                </div>  
            @endforeach
            {!! $posts->links() !!}
        </div>
    </div>
@endsection

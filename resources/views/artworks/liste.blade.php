@extends('layouts.app')
 
@section('content')
    <div class="container">
        @if(isset($info))
            <div class="row alert alert-info">{{ $info }}</div>
        @endif
        {!! $posts->links() !!}
        @foreach($posts as $post)
            <article class="row bg-primary">
                <div class="col-md-12">
                    <header>
                        <h1>{{ $post->titre }}
                            <div class="pull-right">
                                @foreach($post->tags as $tag)
                                    <div class="chip">
                                    <a href="{{ url('artworks/tag/' . $tag->tag_url) }}" class="btn btn-xs btn-info">{{ $tag->tag }}</a></li>
                                    </div>
                                @endforeach
                            </div>
                        </h1>
                    </header>
                    <hr>
                    <section>
                        <p>{{ $post->contenu }}</p>
                        @if(auth()->check() and auth()->user()->admin)
                            <form method="POST" action="{{ route('artworks.destroy', ['id' => $post->id]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <input class="btn btn-danger btn-xs" onclick="return confirm('Vraiment supprimer cet article ?')" type="submit" value="Supprimer cet article">
                            </form>
                        @endif
                        <em class="pull-right">
                            {{ $post->user->name }} le {!! $post->created_at->format('d-m-Y') !!}
                        </em>
                    </section>
                </div>
            </article>
            <br>
        @endforeach
        {!! $posts->links() !!}
    </div>
@endsection
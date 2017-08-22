<div class="grid-sizer"></div>
@foreach($posts as $post)
    <div class="grid-item" data-postid="{{ $post->id }}">
        <div class="card hoverable sticky-action">
            <div class="card-content">
                <div class="valign-wrapper">
                    <div class="col s2">
                        <a href="{{ route('user.show', ['id' => $post->user->id]) }}"><img src="@if(filter_var($post->user->avatar, FILTER_VALIDATE_URL)) {{$post->user->avatar}}
                    @else {{ asset('storage/uploads/avatars/' . $post->user->avatar) }}
                    @endif" alt="avatar artiste" class="circle avatar-responsive"></a>
                    </div>
                    <div class="col s10">
                        <a class="black-text" href="{{ route('user.show', ['id' => $post->user->id]) }}">By {{ $post->user->name or "Artiste"}}</a>
                        @if($post->user->likes()->first())
                        <span>
                            <i class="tiny material-icons">favorite</i>
                            <span class="countLike">{{ $post->user->likes()->count() }}</span>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-image grey lighten-5 waves-effect waves-block waves-light">
                @if(count($post->posts_photos))
                    <img class="activator" src=" {{ asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)}}" alt="{{ ucfirst($post->titre) }}">
                @else
                    <img class="activator" src=" {{ asset('uploads/office.jpg')}}" alt="oeuvre d'art liinkart">
                @endif
                <span class="nbr-photo">
                    <img src="{{ asset('uploads/pictures.png')}}">
                    <span class="nbr-photo2"><b>{{count($post->posts_photos)}}</b></span>
                </span>
            </div>
            <div class=" card-content">
                <span class="card-title activator grey-text text-darken-4">{{ ucfirst($post->titre) }}<i class="material-icons right">more_vert</i></span>
                <span class="chip-technique left-align">
                    @if (isset($post->category))
                    {{ $post->category->category }}
                    @endif
                </span>
                <span class="time-ago">{{ $post->created_at->diffForHumans() }} </span>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ ucfirst($post->titre) }}<i class="material-icons right">close</i></span>
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
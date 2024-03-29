@extends('layouts.app')
@section('titre')
   Profil de {{ ucfirst($user->name) }}
@endsection
@section('css')
   <link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="reference">
    <div class="container">
        <div class="row">
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content center">
                        <div>
                            <img class="circle responsive-img" alt="{{ $user->name }}" src="@if(filter_var($user->avatar, FILTER_VALIDATE_URL)) {{$user->avatar}}
                                                        @else {{ asset('storage/uploads/avatars/' . $user->avatar) }}
                                                        @endif">
                            <span id="nameandlike">
                                <h3 data-userid="{{ $user->id }}">{{ $user->name }}</h3>
                                @if($user->likes()->first())
                                <span>
                                    <i class="justlike material-icons">favorite</i>
                                    <span class="countLike">{{ $user->likes()->count() }}</span>
                                </span>
                                @endif
                            </span>
                            <div class="chip">{{ $user->specialist }}</div>
                            
                            <h5>{{ $user->country }} - {{ $user->city }}</h5><br>
                            @foreach($achievements->sortByDesc('unlocked_at') as $item)
                            <tr>
                                @if($item->isUnlocked())
                                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="{{ $item->details->name }}">
                                        <img src="{{ asset('uploads/achievement/' . $item->details->name . '.png') }}" alt="{{ $item->details->name }}">
                                    </a>
                                @elseif($item->isLocked())
                                    <a class="tooltipped achievement-locked" data-position="bottom" data-delay="50" data-tooltip="{{ $item->details->name }}">
                                        <img src="{{ asset('uploads/achievement/' . $item->details->name . '.png') }}" alt="{{ $item->details->name }}">
                                    </a>
                                @endif
                            </tr>
                            @endforeach
                            <p>Membre depuis : {{ $user->created_at->diffForHumans(null, true) }}</p><br>
                        </div>
                    <p></p>
                    </div>
                    @if (Auth::id() === $user->id || isset(Auth::user()->admin) && Auth::user()->admin == 1)
                        <div class="card-action"><a href="#modal1"><i class="material-icons left">edit</i>Editer profil</a>
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="container" id="editProfile">
                                        <div class="row">
                                            <div class="col s12 m10 offset-m1">
                                                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'files' => true]) !!}
                                                    <div class="col s12 {!! $errors->has('name') ? 'has-error' : '' !!}">
                                                        {{ Form::label('name', 'Votre nom') }}
                                                        {!! Form::text('name', null, ['placeholder' => 'Nom']) !!}
                                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s12 {!! $errors->has('email') ? 'has-error' : '' !!}">
                                                        {{ Form::label('email', 'Votre email') }}
                                                        {!! Form::email('email', null, ['placeholder' => 'Email']) !!}
                                                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s12 {!! $errors->has('country') ? 'has-error' : '' !!}">
                                                        {{ Form::label('country', 'Votre Pays') }}
                                                        {!! Form::text('country', null, ['placeholder' => 'Votre pays']) !!}
                                                        {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s12 {!! $errors->has('city') ? 'has-error' : '' !!}">
                                                        {{ Form::label('city', 'Votre ville actuelle') }}
                                                        {!! Form::text('city', null, ['placeholder' => 'Votre ville actuelle']) !!}
                                                        {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="input-field col s12 {!! $errors->has('specialist') ? 'has-error' : '' !!}">
                                                        {!! Form::select('specialist', ['Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte']) !!}
                                                        {!! $errors->first('specialist', '<small class="help-block">:message</small>') !!}
                                                        {{ Form::label('specialist', 'Votre specialité') }}
                                                    </div>
                                                    <div class="col s12 file-field {!! $errors->has('avatar') ? 'has-error' : '' !!}">
                                                        <div class="btn">
                                                        {{ Form::label('avatar', 'Votre image de profil') }}
                                                        {!! Form::file('avatar') !!}
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                        {!! $errors->first('avatar', '<small class="help-block">:message</small>') !!}
                                                            <input class="file-path validate" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 {!! $errors->has('description') ? 'has-error' : '' !!}">
                                                        {{ Form::label('description', 'Votre description') }}
                                                        {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => "materialize-textarea", 'cols' => "50",  'rows' => "10"]) !!}
                                                        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    {!! Form::submit('Envoyer', ['class' => 'z-depth-3 waves-effect waves-light btn-large right']) !!}
                                                {!! Form::close() !!} 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content">
                        <h5>Notoriété</h5>
                        <p>Vous aimez mes oeuvres? Participez à augmenter ma notoriété</p>
                        <div class="interaction center">
                            <a href="#" class="like">
                            @if(Auth::check())
                                {!! $user->likes()->where('user_id', $user->id)->where('userhasliked_id', Auth::user()->id )->where('like', 1)->first() ? '<i class="material-icons notoriete">favorite</i>' : '<i class="material-icons notoriete">favorite_border</i>' !!}
                            @else
                            <i class="material-icons notoriete">favorite_border</i>
                            @endif
                            </a> 
                        </div>
                        <div class="divider"></div>
                        <p>{{ $user->name }} a reçu: <i class="justlike tiny material-icons">favorite</i><span class="countLike"> {{ $user->likes()->count() }}</span>
                        @if($user->likes()->count() <= 1)
                        <span>  coup de coeur</span>
                        @else
                        <span>  coups de coeur</span>
                        @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">  
                <div class="card">
                    <div class="card-content">
                        <h5>Biographie</h5>
                        <p>{{ $user->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class=" grid">
        @foreach($posts as $post)
            <div class="grid-sizer"></div>               
            <div id="artworks" class="grid-item">
                <div class="card hoverable sticky-action">
                    <div class="card-image waves-effect waves-block waves-light">
                        @if(count($post->posts_photos))
                                <img class="activator" src=" {{ asset('storage/uploads/artworks/' . $post->posts_photos[0]->filename)}}" alt="oeuvre d'art liinkart">
                            @else
                                <img class="activator" src=" {{ asset('uploads/office.jpg')}}" alt="oeuvre d'art liinkart">
                            @endif
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $post->titre }}<i class="material-icons right">more_vert</i></span>
                        <span class="chip-technique left-align">
                            @if (isset($post->category))
                                {{ $post->category->category }}
                            @endif</span>
                        <span class="time-ago">{{ $post->created_at->diffForHumans() }} </span>
                    </div>
                    <div class="card-reveal">
                        <span class="raccourcir-titre card-title grey-text text-darken-4">{{ ucfirst($post->titre) }}<i class="material-icons right">close</i></span>
                        <p>{{ $post->contenu }}</p>
                    </div>
                    <div class="card-action post-delete">
                        <a href="{{ route('artworks.show', ['id' => $post]) }}" class="right-align">VOIR EN DETAILS</a>

                        @if (Auth::id() === $user->id || isset(Auth::user()->admin) && Auth::user()->admin == 1)
                            <br>{!! Form::open(['method' => 'DELETE', 'route' => ['artworks.destroy',  $post->id]]) !!}
                                    {!! Form::submit('supprimer', ['style' =>'color:white;', 'class' => 'btn red']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>  
        @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script src={{ asset("js/masonry.pkgd.min.js") }}></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript">
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 0,
        isFitWidth: true,
        gutter: 30
        });
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });
    </script>
    <script src="{{ asset('js/user.js') }}"></script>
    @if(Auth::check())
    <script>
        var token = '{{ Session::token()}}';
        var ajaxUserHasLiked = '{{ Auth::user()->id }}';
        var urlLike = '{{ route('like')}}';
    </script>
    @endif
@endsection
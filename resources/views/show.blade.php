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
                        <img class="responsive-img" src="@if(filter_var($user->avatar, FILTER_VALIDATE_URL)) {{$user->avatar}}
                                                        @else {{ asset('storage/uploads/avatars/' . $user->avatar) }}
                                                        @endif" style="border-radius: 50%;">
                            <h3 data-userid="{{ $user->id }}">{{ $user->name }}</h3><br>
                            <div class="interaction">
                                <a href="#" class="like">{{  Auth::user()->likes()->where('user_id', $user->id)->first() ? Auth::user()->likes()->where('user_id', $user->id)->first()->like == 1 ? 'You like this user' : 'Like' : 'Like'  }}</a> |
                                <a href="#" class="like">{{ Auth::user()->likes()->where('user_id', $user->id)->first() ? Auth::user()->likes()->where('user_id', $user->id)->first()->like == 0 ? 'You don\'t like this user' : 'Dislike' : 'Dislike'  }}</a>
                            </div>
                            <h5>{{ $user->country }}</h5>
                            <h6>{{ $user->city }}</h6><br>
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
                                                        {!! Form::select('specialist', ['Peinture', 'Peinture à Huile', 'Peinture acrylique', 'Aquarelle', 'Photographie', 'Photographie argentique', 'Photographie numérique', 'Oeuvres sur papier', 'Dessin', 'Encre', 'Estampe', 'Sérigraphie', 'Lithographie', 'Collage', 'Gravure', 'Linogravure', 'Sculpture', 'Sculpture bois', 'Sculpture argile', 'Sculpture métal', 'Sculpture bronze', 'Sculpture pierre', 'Sculpture terre cuite', 'Sculpture céramique', 'Sculpture platre', 'Sculpture marbre', 'Sculpture verre', 'Technique mixte'], null, ['placeholder' => 'Votre spécialité artistique']) !!}
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
                        <h5>Description bio</h5>
                        <p>{{ $user->description  }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
      <div class="card">
                           
        @foreach($posts as $post)
            <div id="artworks" class="col s12 m6 l4">
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
                    <div class="card-action">
                        <a href="{{ route('artworks.show', ['id' => $post]) }}" class="right-align">VOIR EN DETAILS</a>

                        @if (Auth::id() === $user->id || isset(Auth::user()->admin) && Auth::user()->admin == 1)
                            <br>{!! Form::open(['method' => 'DELETE', 'route' => ['artworks.destroy',  $post->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
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
            
                

        <br>
        <div class="panel panel-primary">   
           
                     
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/user.js') }}"></script>
    <script>
        var token = '{{ Session::token()}}';
        var userHasLiked = '{{ Auth::user()->id }}';
        var urlLike = '{{ route('like')}}';
    </script>
@endsection
@extends('layouts.app')
@section('css')
@endsection
@section('content')
<section class="reference">
    <div class="container">
        <div class="row">
            <div class="col s12">  
                <div class="card">
                    <div class="card-content center">
                        <div>
                        <img class="responsive-img" src=" {{ asset('storage/uploads/avatars/' . $user->avatar) }}" style="border-radius: 50%;">
                            <h3>{{ $user->name }}</h3><br>
                            <h5>{{ $user->country }}</h5>
                            <h6>{{ $user->city }}</h6><br>
                            @foreach($achievements as $item)
                            <tr>
                                @if($item->isUnlocked())
                                    <td>{{ $item->details->name }}</td>
                                @else
                                    <td>Progress: {{$item->points}}/{{$item->details->points}}</td>
                                @endif
                            </tr>
                            @endforeach
                            <p>Membre depuis : {{ $user->created_at->diffForHumans(null, true) }}</p><br>
                        </div>
                        <div class="card-content center">
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/acorn.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/adduser.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/arrow.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/badge.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bag.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/balloon.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/barchart.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bolt.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/brew.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bronze.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/brush.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/bug.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/calendar.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cards.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/chat.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/clock.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cloud.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/coffee.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/conversation.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/crosshair.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/cut.png"></a>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am toolfdsfdfsqfdsqdftip"><img class="liinkart-profile-achievement liinkart-profile-achievement1" src="/uploads/achievement/doc.png"></a>
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
                                                    <div class="col s6 {!! $errors->has('country') ? 'has-error' : '' !!}">
                                                        {{ Form::label('country', 'Votre Pays') }}
                                                        {!! Form::text('country', null, ['placeholder' => 'Votre pays']) !!}
                                                        {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s6 {!! $errors->has('city') ? 'has-error' : '' !!}">
                                                        {{ Form::label('city', 'Votre ville actuelle') }}
                                                        {!! Form::text('city', null, ['placeholder' => 'Votre ville actuelle']) !!}
                                                        {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s6 {!! $errors->has('specialist') ? 'has-error' : '' !!}">
                                                        {{ Form::label('specialist', 'Votre specialité') }}
                                                        {!! Form::text('specialist', null, ['placeholder' => 'Votre specialité']) !!}
                                                        {!! $errors->first('specialist', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s6 {!! $errors->has('avatar') ? 'has-error' : '' !!}">
                                                        {{ Form::label('avatar', 'Votre image de profil') }}
                                                        {!! Form::file('avatar') !!}
                                                        {!! $errors->first('avatar', '<small class="help-block">:message</small>') !!}
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

            <div class="col s12 m4">  
                <div class="card">
                    <div class="card-content">
                        <h5>Spécialisation</h5>
                        <h6><span>{{ $user->specialist }}</span></h6>
                    </div>
                </div>
            </div>
            <div class="col s12 m8">  
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
            <div id="artworks" class="col s6 m4 l3">
                <div class="card hoverable sticky-action">
                    <div class="card-content">                        
                    {{-- <a class="btn-floating halfway-feb btn-large waves-effect waves-light red"><i class="material-icons">favorite_border</i></a> --}}
                    </div>
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset ('uploads/office.jpg')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $post->titre }}<i class="material-icons right">more_vert</i></span>
                        <span class="chip-technique left-align">{{ $post->technique }}</span>
                        <span class="time-ago">{{ $post->created_at->diffForHumans() }} </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{ $post->titre }}<i class="material-icons right">close</i></span>
                        <p>{{ $post->contenu }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('artworks.show', ['id' => $post]) }}" class="right-align">VOIR EN DETAILS</a>

                        @if(auth()->check() and auth()->user()->admin)
                            <form method="POST" action="{{ route('artworks.destroy', ['id' => $post->id]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <input class="btn btn-danger" onclick="return confirm('Vraiment supprimer cet article ?')" type="submit" value="Supprimer">
                            </form>
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
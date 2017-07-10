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
                        <img class="responsive-img" src=" {{ asset('storage/uploads/avatars/' . $user->avatar) }}" style="border-radius: 50%;">
                            <h5>{{ $user->name }}</h5>
                            <p>Membre depuis : {{ $user->created_at->diffForHumans(null, true) }}</p>
                        <div class="card-content">
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
                                                    <div class="col s6 {!! $errors->has('name') ? 'has-error' : '' !!}">
                                                        {{ Form::label('name', 'Votre nom') }}
                                                        {!! Form::text('name', null, ['placeholder' => 'Nom']) !!}
                                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s6 {!! $errors->has('email') ? 'has-error' : '' !!}">
                                                        {{ Form::label('email', 'Votre email') }}
                                                        {!! Form::email('email', null, ['placeholder' => 'Email']) !!}
                                                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                                    </div>
                                                    <div class="col s6 {!! $errors->has('avatar') ? 'has-error' : '' !!}">
                                                        {{ Form::label('avatar', 'Votre image de profil') }}
                                                        {!! Form::file('avatar') !!}
                                                        {!! $errors->first('avatar', '<small class="help-block">:message</small>') !!}
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

            <div class="col s12">  
                <div class="card">
                    <div class="card-content">
                        <h5>Description bio</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis egestas sapien. Vivamus vel velit at nisl suscipit finibus ac at felis. Aenean ipsum lectus, ultrices eu convallis ac, viverra et elit. In venenatis volutpat iaculis. Etiam a est quis sapien posuere dignissim in non mauris. Phasellus non orci accumsan, molestie eros in, ullamcorper lectus. Praesent nisl eros, euismod et feugiat id, semper eu mauris. Morbi eu eros eu leo cursus vehicula. Duis gravida hendrerit tortor, ac pellentesque mauris aliquet eget. Sed sed mi quis sapien sodales faucibus. In suscipit massa sit amet ligula dignissim, sed rutrum velit imperdiet.</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col s12 m5 offset-m5"><p>activité</p>
                        <p>Oeuvres publiées</p>
                        <p>Oeuvres remportées</p>
                </div>
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
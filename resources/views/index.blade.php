@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col offset-l4 l6"></div>
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            
            <div class="row">
                
                    <div class="col s12 m3 l3"><p>s12 m6 l3</p></div>
                    <div class="col s12 m6 l6">
                        <h3 class="align-center">Liste des utilisateurs</h3>
                            <table class="table highlight responsive-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{!! $user->id !!}</td>
                                    <td class=""><strong>{!! $user->name !!}</strong></td>
                                    <td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn']) !!}</td>
                                    <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn']) !!}</td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                                            {!! Form::submit('Supprimer', ['class' => 'btn', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col s12 m3 l3"><p>s12 m6 l3</p></div>
                
            </div>
            {!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
            {!! $users->links() !!}
        </div>
    </div>
@endsection
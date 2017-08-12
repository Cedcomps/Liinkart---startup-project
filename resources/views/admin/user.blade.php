<div class="row">Utilisateurs
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
    <div class="row">
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
                    <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn green','style' =>'color:white;']) !!}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn red','style' =>'color:white;', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
    {!! $users->links() !!}
</div>
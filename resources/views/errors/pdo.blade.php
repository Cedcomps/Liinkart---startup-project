@extends('layouts.app')
 @section('titre')
    Erreur accès base de données
@endsection
@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Il y a un problème !</h3>
            </div>
            <div class="panel-body"> 
                <p>Notre base de données semble inaccessible pour le moment.</p>
                <p>Veuillez nous en excuser.</p>
                <strong>{{ $errors->has('email') ? ' has-error' : '' }}</strong>
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        </div>
    </div>
@endsection
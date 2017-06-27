@extends('layouts.app')
 
@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">Ajout d'un article</div>
            <div class="panel-body"> 
                <form method="POST" action="{{ url('/post') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                        <input class="form-control" placeholder="Titre" name="titre" type="text" value="{{ old('titre') }}" autofocus>
                        @if ($errors->has('titre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('titre') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                        <textarea class="form-control" placeholder="Contenu" name="contenu" cols="50" rows="10">{{ old('contenu') }}</textarea>
                        @if ($errors->has('contenu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('contenu') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                        <input class="form-control" placeholder="Entrez les tags séparés par des virgules" name="tags" type="text" value="{{ old('tags') }}">
                        @if ($errors->has('tags'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tags') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer !</button>
                </form>
 
            </div>
        </div>
    </div>
@endsection
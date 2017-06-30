@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6 push-s3">
                <h1 class="align-center">Ajout d'une Oeuvre</h1>
                <div class="card-panel text-darken-2"> 
                    <form method="POST" action="{{ url('/artworks') }}">
                        {{ csrf_field() }}
                        <div class="row{{ $errors->has('titre') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <label for="titre" data-error="wrong" data-success="right">Titre de votre oeuvre d'art</label>
                                <input class="validate" placeholder="Titre" name="titre" type="text" value="{{ old('titre') }}" autofocus>
                                @if ($errors->has('titre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('contenu') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <label for="contenu" data-error="wrong" data-success="right">Description</label>
                                <textarea class="materialize-textarea" placeholder="Contenu" name="contenu" cols="50" rows="10">{{ old('contenu') }}</textarea>
                                @if ($errors->has('contenu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <label for="tags" data-error="wrong" data-success="right">Tags</label>
                                <input class="validate" placeholder="Entrez les tags séparés par des virgules" name="tags" type="text" value="{{ old('tags') }}">
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
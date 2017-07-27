@extends('layouts.app')
 @section('titre')
    Poster une nouvelle oeuvre 
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m10 push-m1 l8 push-l2">
                <h1 class="align-center">Ajout d'une Oeuvre</h1>
                <div class="card-panel text-darken-2"> 
                    <form method="POST" action="{{ url('/artworks') }}" files="true" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row{{ $errors->has('titre') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <label for="titre" data-error="wrong" data-success="right">Titre de votre oeuvre d'art</label>
                                <input class="validate" data-length="30" placeholder="Titre" name="titre" type="text" value="{{ old('titre') }}" autofocus>
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
                        <div class="row">
                            <div class="input-field col l6 s12 {{ $errors->has('year') ? ' has-error' : '' }}">
                                <label for="year" data-error="wrong" data-success="right">Année de création</label>
                                <input class="validate" data-length="4" placeholder="Entrez l'année de création de l'oeuvre" name="year" type="text" value="{{ old('year') }}">
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col l6 s12 {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <select class="validate" name="category_id" >
                                    <option value="{{ old('category_id')}}" disabled selected>Choisissez la technique</option>
                                    <option value="13">Collage</option>
                                    <option value="34">Création numérique</option>
                                    <option value="8">Dessin</option>
                                    <option value="28">Dessin calligraphie</option>
                                    <option value="29">Dessin fusain</option>
                                    <option value="30">Dessin crayon</option>
                                    <option value="31">Dessin graphite</option>
                                    <option value="32">Dessin encre</option>
                                    <option value="33">Dessin pastel</option>
                                    <option value="9">Encre</option>
                                    <option value="10">Estampe</option>
                                    <option value="14">Gravure</option>
                                    <option value="15">Linogravure</option>
                                    <option value="12">Lithographie</option>
                                    <option value="7">Oeuvres sur papier</option>
                                    <option value="1">Peinture</option>
                                    <option value="2">Peinture à huile</option>
                                    <option value="3">Peinture acrylique</option>
                                    <option value="4">Photographie</option>
                                    <option value="5">Photographie argentique</option>
                                    <option value="6">Photographie numérique</option>
                                    <option value="16">Sculpture</option>
                                    <option value="17">Sculpture bois</option>
                                    <option value="18">Sculpture argile</option>
                                    <option value="19">Sculpture métal</option>
                                    <option value="20">Sculpture bronze</option>
                                    <option value="21">Sculpture pierre</option>
                                    <option value="22">Sculpture terre cuite</option>
                                    <option value="23">Sculpture céramique</option>
                                    <option value="24">Sculpture platre</option>
                                    <option value="25">Sculpture marbre</option>
                                    <option value="26">Sculpture verre</option>
                                    <option value="11">Sérigraphie</option>
                                    <option value="27">Technique mixte</option>
                                </select>
                                <label for="category_id" data-error="wrong" data-success="right">Technique et matériaux</label>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l4 s12 {{ $errors->has('largeur') ? ' has-error' : '' }}">
                                <label for="largeur" data-error="wrong" data-success="right">Largeur</label>
                                <input class="validate" data-length="5" placeholder="En centimètres" name="largeur" type="text" value="{{ old('largeur') }}">
                                @if ($errors->has('largeur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('largeur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="input-field col l4 s12 {{ $errors->has('longueur') ? ' has-error' : '' }}">
                                <label for="longueur" data-error="wrong" data-success="right">Longueur</label>
                                <input class="validate" data-length="5" placeholder="En centimètres" name="longueur" type="text" value="{{ old('longueur') }}">
                                @if ($errors->has('longueur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longueur') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col l4 s12 {{ $errors->has('hauteur') ? ' has-error' : '' }}">
                                <label for="hauteur" data-error="wrong" data-success="right">Hauteur</label>
                                <input class="validate" data-length="5" placeholder="En centimètres" name="hauteur" type="text" value="{{ old('hauteur') }}">
                                @if ($errors->has('hauteur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hauteur') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="file-field col s12 {!! $errors->has('photos') ? 'has-error' : '' !!}">
                                <div class="btn">
                                    {{ Form::label('photos', 'Ajouter des photos') }}
                                    {!! Form::file('photos[]', ['multiple']) !!}
                                </div>
                                <div class="file-path-wrapper">
                                    {!! $errors->first('photos', '<small class="help-block">:message</small>') !!}
                                    <input class="file-path validate" type="text" multiple="true">
                                </div>
                            </div>
                            <div class="input-field col s12 {{ $errors->has('tags') ? ' has-error' : '' }}">
                                <label for="tags" data-error="wrong" data-success="right">Tags</label>
                                <input class="validate" placeholder="Entrez les tags séparés par des virgules" name="tags" type="text" value="{{ old('tags') }}">
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
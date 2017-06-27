@extends('layout.template')

@section('content')
	 <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Envoi d'une signature</div>
            <div class="panel-body"> 
                {!! Form::open(['url' => 'signature', 'files' => true]) !!}
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Modifier mon profil</h4>
                    </div>
                    <div class="panel-body">

                        {!! Form::model($profile,
                        array(
                        'route' => array('profile.update', $profile->id),
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nom', [
                            'class' => 'col-md-4 control-label',
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::text('name', old('name'), [
                                'class' => 'form-control'
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Adresse email', [
                            'class' => 'col-md-4 control-label'
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::email('email', old('email'), [
                                'class' => 'form-control'
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Enregistrer modifications',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>

                        {!! Form::close() !!}

                        <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur mon profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
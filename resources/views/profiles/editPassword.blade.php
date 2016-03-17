@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check() && Auth::user()->id == $profile->id)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Modifier mon profil</h4>
                        </div>
                        <div class="panel-body">

                            {!! Form::model($profile,
                            array(
                            'route' => array('password.update', $profile->id),
                            'method' => 'PUT',
                            'class' => 'form-horizontal'
                            )) !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Nom', [
                                'class' => 'col-md-4 control-label',
                                ]) !!}
                                <div class="col-md-5">
                                    {!! Form::text('name', old('name'), [
                                    'class' => 'form-control',
                                'readonly' => 'readonly'
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
                                    'class' => 'form-control',
                                'readonly' => 'readonly'
                                    ])
                                !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'Nouveau mot de passe', [
                                'class' => 'col-md-4 control-label'
                                ]) !!}
                                <div class="col-md-5">
                                    {!! Form::password('password', [
                                    'class' => 'form-control'
                                    ])
                                !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Confirmer nouveau mot de passe', [
                                'class' => 'col-md-4 control-label'
                                ]) !!}
                                <div class="col-md-5">
                                    {!! Form::password('password_confirmation',  [
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

                            <br>

                            <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur mon profil</a>
                        </div>
                    </div>
                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Ce n'est pas votre profil</p>
                        </div>
                        <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur mon profil</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
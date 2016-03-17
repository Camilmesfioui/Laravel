@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check() && Auth::user()->isAdmin)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Gérer le statut de cet utilisateur</h4>
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

                            <br>

                            <div class="form-group">
                                {!! Form::label('isAdmin', 'Administrateur', [
                                'class' => 'col-md-4 control-label'
                                ]) !!}

                                <div class="col-md-4">
                                    {!! Form::radio('isAdmin', 0) !!}
                                    Non
                                    <br>
                                    {!! Form::radio('isAdmin', 1) !!}
                                    Oui
                                    <br>
                                </div>
                            </div>

                            <div class="text-center">
                                {!! Form::submit('Enregistrer modifications',
                                    ['class' => 'btn btn-primary'])
                                !!}
                            </div>

                            {!! Form::close() !!}

                            <br>

                            <a href="{{ route('profile.index', Auth::user()->id) }}">Retourner sur la liste des utilisateurs</a>
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
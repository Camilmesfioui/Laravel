@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Mes informations</h4>
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

                        <div class="text-center">
                            <a href="{{ route('profile.edit', Auth::user()->id) }}">Modifier mon profil</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
                @include('profile.showPosts')
                @include('profile.showProjects')
            </div>
        </div>
    </div>
@endsection
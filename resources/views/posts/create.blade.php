@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ajouter un article
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array(
                        'route' => 'post.store',
                        'method' => 'POST'
                        )) !!}

                        <div class="form-group">

                        {!! Form::label('title', 'Titre') !!}
                        {!! Form::text('title', '', [
                            'class' => 'form-control',
                            'placeholder' => 'Mon titre'
                            ])
                        !!}
                        </div>

                        <div class="form-group">

                            {!! Form::label('content', 'Contenu') !!}
                            {!! Form::textarea('content', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Mon contenu'
                                ])
                            !!}
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Publier l\'article',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                @if(Auth::check()
                    && (Auth::user()->id == $post->user_id
                    || Auth::user()->isAdmin))
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Modifier article</h4>
                        </div>

                        <div class="panel-body">
                            {!! Form::model($post,
                            array(
                            'route' => array('post.update', $post->id),
                            'method' => 'PUT'
                            )) !!}

                            <div class="form-group">

                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', old('title'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Mon titre'
                                    ])
                                !!}
                            </div>

                            <div class="form-group">

                                {!! Form::label('content', 'Contenu') !!}
                                {!! Form::textarea('content', old('content'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Mon contenu'
                                    ])
                                !!}
                            </div>

                            <div class="text-center">
                                {!! Form::submit('Modifier l\'article',
                                    ['class' => 'btn btn-primary'])
                                !!}
                            </div>

                            {!! Form::close() !!}

                            <a href="{{route('post.show', $post->id)}}">
                                Retour à l'article
                            </a>
                        </div>
                    </div>
                @else
                    <div class="alert-danger alert">
                        <div class="text-center">
                            <p>Vous n'avez pas les droits nécessaires</p>
                        </div>
                        <a href="{{ route('post.show', $post->id) }}" class="text-center">
                            Retour à l'article
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
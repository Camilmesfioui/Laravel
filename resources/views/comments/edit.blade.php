@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Modifier commentaire</h4>
                    </div>
                        <div class="panel-body">
                            @if(Auth::check()
                                && (Auth::user()->id == $comment->user_id
                                || Auth::user()->isAdmin))

                                {!! Form::model($comment,
                                array(
                                    'route' => array('comment.update', $comment->id),
                                    'method' => 'PUT'
                                )) !!}


                                <div class="form-group">

                                    {!! Form::label('comment', 'Commenter') !!}
                                    {!! Form::textarea('comment', old('comment'), [
                                        'class' => 'form-control',
                                        'placeholder' => 'Mon commentaire'
                                        ])
                                    !!}
                                </div>
                                <div class="text-center">
                                    {!! Form::submit('Modifier',
                                    ['class' => 'btn btn-primary'])
                                     !!}
                                </div>
                            @else
                                <p>Vous n'avez pas les droits nécessaires</p>
                                <a href="{{ route('post.show', $comment->post_id) }}" class="text-center">
                                    Retour à l'article
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
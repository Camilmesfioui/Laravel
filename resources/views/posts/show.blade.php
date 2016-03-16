@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>{{ $post->title }}</h3>
                        <div class="text-right">
                            <h5>{{ $post->created_at }}</h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{{ $post->content }}</p>
                        <div class="text-center">
                            @if(Auth::check()
                                && (Auth::user()->id == $post->user_id
                                || Auth::user()->isAdmin))

                                {!! Form::model($post,array(
                                'route' => array('post.destroy', $post->id),
                                'method' => 'DELETE'))
                                !!}
                                <br>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning">Modifier article</a>
                                {!! Form::submit('Supprimer article', ['class' => 'btn btn-danger']) !!}

                                {!! Form::close() !!}
                            @endif
                        </div>
                        @include('comments.show')
                        @if(Auth::check())
                            @include('comments.create')
                        @endif
                        <a href="{{ route('post.index') }}">Retour aux articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
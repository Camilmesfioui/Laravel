<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Commentaires</h3>
    </div>
    <div class="panel-body">
        @foreach($post->comments as $comment)
            <p><strong>{{$comment->user->name}}</strong></p>
            <p>{{ $comment->comment }}</p>
            <div class="text-center">
                @if(Auth::check()
                    && (Auth::user()->id == $comment->user_id
                    || Auth::user()->isAdmin))

                    {!! Form::model($comment,
                    array(
                        'route' => array('comment.destroy', $comment->id),
                        'method' => 'DELETE'))
                    !!}
                    <br>
                    <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-warning">Modifier commentaire</a>
                    {!! Form::submit('Supprimer commentaire', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}
                @endif
            </div>
        @endforeach
        @if(Auth::check())
            @include('comments.create')
        @endif
    </div>
</div>
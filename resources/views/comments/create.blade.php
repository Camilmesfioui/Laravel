<div class="panel-body">
    {!! Form::open(
    array(
       'route' =>  array('comment.store', $post->id),
       'method' => 'POST'))
    !!}


    <div class="form-group">

        {!! Form::label('comment', 'Commenter') !!}
        {!! Form::textarea('comment', '', [
            'class' => 'form-control',
            'placeholder' => 'Mon commentaire'
            ])
        !!}
    </div>
    <div class="text-center">
        {!! Form::hidden('post_id', $post->id) !!}
        {!! Form::submit('Envoyer',
        ['class' => 'btn btn-primary'])
         !!}
    </div>

    {!! Form::close() !!}
</div>
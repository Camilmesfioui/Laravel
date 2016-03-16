<div class="panel-heading">
    <h4>Répondre à la propostition</h4>
</div>
<div class="panel-body">
    {!! Form::model($project,
        array(
            'route' => array('project.update', $project->id),
            'method' => 'PUT'
            ))
        !!}

    <div class="form-group">
        {!! Form::label('status', 'Statut') !!}

        <div class="col-md-offset-1">
            {!! Form::radio('status', 0)
            !!}
            En attente d'une réponse 
            <br>
            {!! Form::radio('status', 1)
            !!}
            Refuser le projet
            <br>
            {!! Form::radio('status', 2)
            !!}
            Accepter le projet
            <br>
        </div>

        <br>

        <div class="text-center">
            {!! Form::submit('Enregistrer la réponse',
                ['class' => 'btn btn-primary'])
            !!}
        </div>

        <br>

        <div class="form-group">
            {!! Form::close() !!}

            {!! Form::model($project,array(
                'route' => array('project.destroy', $project->id),
                'method' => 'DELETE'))
            !!}

            <div class="text-center">
                {!! Form::submit('Supprimer le projet', ['class' => 'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>
    <a href="{{ route('project.index') }}">Retour à la liste des projets</a>
</div>



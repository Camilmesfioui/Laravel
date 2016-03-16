@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>{{ $project->project_name}}</h3>
                        <div class="text-right">
                            @if($project->status == 0)
                                <h4>En attente d'une réponse <i class="fa fa-circle-o"></i></h4>
                            @elseif($project->status == 1)
                                <h4>Projet refusé <i class="fa fa-times"></i></h4>
                            @elseif($project->status == 2)
                                <h4>Project accepté <i class="fa fa-check"></i></h4>
                            @endif
                        </div>
                    </div>
                    <div class="panel-body">
                        <h3>Informations du client</h3>
                        <p>{{ $project->customer_infos }}</p>

                        <h3>Adresse du client</h3>
                        <p>{{ $project->customer_address }}</p>

                        <h3>Adresse email du client</h3>
                        <p>{{ $project->customer_email }}</p>

                        <h3>Numéro de téléphone du client</h3>
                        <p>{{ $project->customer_numberphone }}</p>

                        <h3>Informations du contact</h3>
                        <p>{{ $project->contact_infos }}</p>

                        <h3>Adresse du contact</h3>
                        <p>{{ $project->contact_address }}</p>

                        <h3>Adresse email du contact</h3>
                        <p>{{ $project->contact_email }}</p>

                        <h3>Numéro de télphone du contact</h3>
                        <p>{{ $project->contact_numberphone }}</p>

                        <h3>Fiche d'identité</h3>
                        <p>{{ $project->identity_sheet }}</p>

                        <h3>Type du projet</h3>
                        <p>{{ $project->project_type }}</p>

                        <h3>Contexte</h3>
                        <p>{{ $project->context }}</p>

                        <h3>Demandes</h3>
                        <p>{{ $project->request }}</p>

                        <h3>Contraintes</h3>
                        <p>{{ $project->constraints }}</p>
                    </div>
                    @if(Auth::check() && Auth::user()->isAdmin)
                    @include('projects.status')
                    @endif
                    @if(Auth::check()
                        && (Auth::user()->id == $project->user_id
                        || Auth::user()->isAdmin))
                    <div class="panel-heading">
                        <h4>Gérer le projet</h4>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            {!! Form::model($project,array(
                                'route' => array('project.destroy', $project->id),
                                'method' => 'DELETE'))
                            !!}
                            <br>
                            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning">Modifier projet</a>
                            {!! Form::submit('Supprimer le projet', ['class' => 'btn btn-danger']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(Auth::user()->isAdmin)
                        <div class="panel-body">
                            <a href="{{ route('project.index') }}">Retour à la liste des projets</a>
                        </div>
                    @else
                        <div class="panel-body">
                            <a href="{{ route('profile.show', Auth::user()->id) }}">Retourner sur mon profil</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
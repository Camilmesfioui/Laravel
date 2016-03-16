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
                                <h4>En attente d'une réponse</h4>
                            @elseif($project->status == 1)
                                <h4>Projet refusé</h4>
                            @elseif($project->status == 2)
                                <h4>Project accepté</h4>
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

                        <h3>Numéro de télphone du client</h3>
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
                    @include('projects.edit')
                </div>
            </div>
        </div>
    </div>
@endsection
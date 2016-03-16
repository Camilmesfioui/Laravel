@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Soumettre un projet</h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array(
                        'route' => 'project.store',
                        'method' => 'POST'
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('project_name', 'Nom du projet') !!}
                            {!! Form::text('project_name', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Laroche Traiteur'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_infos', 'Informations à propos du client') !!}
                            {!! Form::text('customer_infos', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Jean-Michel Laroche, Proprietaire'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_address', 'Adresse du client') !!}
                            {!! Form::text('customer_address', '', [
                                'class' => 'form-control',
                                'placeholder' => '12 rue victor hugo 75018 Paris'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_email', 'Adresse email du client') !!}
                            {!! Form::email('customer_email', '', [
                                'class' => 'form-control',
                                'placeholder' => 'jmlaroche75@wanadoo.fr'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_numberphone', 'Numéro de téléphone du client') !!}
                            {!! Form::text('customer_numberphone', '', [
                                'class' => 'form-control',
                                'placeholder' => '06.42.13.37.69'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_infos', 'Informations à propos du contact') !!}
                            {!! Form::text('contact_infos', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Jean-Michel Laroche, Proprietaire'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_address', 'Adresse du contact') !!}
                            {!! Form::text('contact_address', '', [
                                'class' => 'form-control',
                                'placeholder' => '12 rue victor hugo 75018 Paris'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_email', 'Adresse email du contact') !!}
                            {!! Form::email('contact_email', '', [
                                'class' => 'form-control',
                                'placeholder' => 'jmlaroche75@wanadoo.fr'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_numberphone', 'Numéro de téléphone du contact') !!}
                            {!! Form::text('contact_numberphone', '', [
                                'class' => 'form-control',
                                'placeholder' => '06.42.13.37.69'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('identity_sheet', "Fiche d'identité") !!}
                            {!! Form::textarea('identity_sheet', '', [
                                'class' => 'form-control',
                                'placeholder' => "Propriétaire - Cuisinier : Jean-Michel Laroche : 57 Ans [...]"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('project_type', 'Type de projet') !!}
                            <div class="col-md-offset-1">
                                {!! Form::radio('project_type', 'Site-web') !!}
                                Site internet
                                <br>
                                {!! Form::radio('project_type', '3D') !!}
                                3D
                                <br>
                                {!! Form::radio('project_type', 'Animation-2D') !!}
                                Animation 2D
                                <br>
                                {!! Form::radio('project_type', 'Installation') !!}
                                Installation multimédia
                                <br>
                                {!! Form::radio('project_type', 'Jeu-video') !!}
                                Jeu vidéo
                                <br>
                                {!! Form::radio('project_type', 'Dvd') !!}
                                DVD
                                <br>
                                {!! Form::radio('project_type', 'Print') !!}
                                Print
                                <br>
                                {!! Form::radio('project_type', 'Cd-rom') !!}
                                CD-ROM
                                <br>
                                {!! Form::radio('project_type', 'Evenement') !!}
                                Événement
                                <br>
                                {!! Form::radio('project_type', 'autre') !!}
                                Autre
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('context', "Contexte du projet") !!}
                            {!! Form::textarea('context', '', [
                                'class' => 'form-control',
                                'placeholder' => "Perte d'un gros client et recherche de nouveaux clients récurrents"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('request', "Demandes") !!}
                            {!! Form::textarea('request', '', [
                                'class' => 'form-control',
                                'placeholder' => "Je voudrais un site pour développer le traiteur auprès de société de moyennes ou grosses importances afin d'avoir la possibilité de prestations récurrentes à l'année. [...]"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('goals', "Objectifs") !!}
                            {!! Form::textarea('goals', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Un site attractif pour attirer de nouveaux clients récurrents, des entreprises de préférence. [...]'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('constraints', "Contraintes") !!}
                            {!! Form::textarea('constraints', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Je n’ai pas les accès au site actuel. [...]'
                                ])
                            !!}
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Soumettre le projet',
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
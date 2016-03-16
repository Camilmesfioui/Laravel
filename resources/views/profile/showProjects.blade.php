@if(count(Auth::user()->projects) > 0)
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Mes projets</h4>
        </div>
        <div class="panel-body">
        @foreach(Auth::user()->projects as $project)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{ $project->project_name }}</h4>
                    <h5 class="text-right">{{$project->status}}</h5>
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
            </div>
        @endforeach
        </div>
    </div>
@endif



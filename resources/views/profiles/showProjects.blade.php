@if(count(Auth::user()->projects) > 0)
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Mes projets</h4>
        </div>
        <div class="panel-body">
            @foreach(Auth::user()->projects as $project)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('project.show', $project->id) }}">
                            <h4>{{ $project->project_name}}</h4>
                        </a>
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



@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>
            @foreach($list as $project)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('project.show', $project->id) }}">
                               <h4>{{ $project->project_name}}</h4>
                            </a>
                            <div class="text-right">
                                @if($project->status == 0)
                                    <h5>En attente d'une réponse</h5>
                                @elseif($project->status == 1)
                                    <h5>Projet refusé</h5>
                                @elseif($project->status == 2)
                                    <h5>Project accepté</h5>
                                @endif
                            </div>
                        </div>

                        <div class="panel-body">
                            <h4>Client</h4>
                            <p>{{ $project->customer_infos }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $list->links() !!}
            </div>
        </div>
    </div>
@endsection
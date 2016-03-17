@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>

            @foreach($users as $profile)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>{{ $profile->name }}</h4>
                            <div class="text-right">
                                @if($profile->isAdmin == 0)
                                    <h5>Simple utilisateur <i class="fa fa-2x fa-user"></i></h5>
                                @elseif($profile->isAdmin == 1)
                                    <h5>Administrateur <i class="fa fa-2x fa-user-secret"></i></h5>
                                @endif
                            </div>
                        </div>

                        <div class="panel-body">
                            {!! Form::model($profile,
                            array(
                                'route' => array('profile.destroy', $profile->id),
                                'method' => 'DELETE'))
                            !!}


                            <div class="text-center">
                                <a class="btn btn-warning" href="{{ route('admin.edit', $profile->id) }}">
                                    Gérer les droits
                                </a>

                                {!! Form::submit('Supprimer le profil', ['class' => 'btn btn-danger']) !!}
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
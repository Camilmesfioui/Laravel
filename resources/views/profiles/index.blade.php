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
                            <a href="">
                                <h4>{{ $profile->name }}</h4>
                            </a>
                            <div class="text-right">
                                <p>Utilisateur</p>
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
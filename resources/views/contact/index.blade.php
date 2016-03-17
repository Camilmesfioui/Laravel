@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Contactez-nous</h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Votre nom') !!}
                            {!! Form::text('name', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre nom')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Votre adresse e-mail') !!}
                            {!! Form::email('email', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre adresse e-mail')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('message', 'Votre message') !!}
                            {!! Form::textarea('message', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre message')) !!}
                        </div>

                       <div class="text-center">
                           <div class="form-group">
                               {!! Form::submit('Envoyer',
                                 array('class'=>'btn btn-primary')) !!}
                           </div>
                       </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@include('layouts.app')

<h1 class="text-center">Contactez nous</h1>

<div class="col-md-10 col-md-offset-1">
    @include ('errors.message')
</div>

<div class="container">
    <div class="row">
        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Votre Nom') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Votre Nom')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Votre adresse E-Mail') !!}
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Votre adresse E-Mail')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Votre Message') !!}
            {!! Form::textarea('message', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Votre Message')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Contactez Nous',
              array('class'=>'btn btn-primary')) !!}
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        {!! Form::close() !!}
    </div>
</div>

@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Luo käyttäjätunnus</h1>


      @include('layouts.partials.errors')


      {{ Form::open(['route' => 'register_path']) }}

        <div class="form-group">

          {{ Form::label('username', 'Tunnus:') }}
          {{ Form::text('username', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('email', 'Sähköposti:') }}
          {{ Form::text('email', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('password', 'Salasana:') }}
          {{ Form::password('password', ['class' => 'form-control']) }}

        </div>

        <div class="form-group">

          {{ Form::label('password_confirmation', 'Salasana uudelleen:') }}
          {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::submit('Luo', ['class' => 'btn btn-primary']) }}

        </div>




      {{ Form::close() }}


    </div>


  </div>

@stop



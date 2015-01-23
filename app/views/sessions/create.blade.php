@extends('layouts.default')


@section('content')

  <h1>Sisäänkirjautuminen</h1>

  <p>Kirjaudu sisään sähköpostiosoitteellasi.</p>


  @include('layouts.partials.errors')


  {{ Form::open(['route' => 'login_path']) }}

    <div class="form-group">

      {{ Form::label('email', 'Sähköposti:') }}
      {{ Form::text('email', null, ['class' => 'form-control']) }}

    </div>


    <div class="form-group">

      {{ Form::label('password', 'Salasana:') }}
      {{ Form::password('password', ['class' => 'form-control']) }}

    </div>


    <div class="form-group">

      {{ Form::submit('Kirjaudu sisään', ['class' => 'btn btn-primary']) }}

    </div>




  {{ Form::close() }}



@stop

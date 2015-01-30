
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Uusi tila</h1>

      @include('layouts.partials.errors')


      {{ Form::open(['route' => ['translation_edit', $translation->id]]) }}


        <div class="form-group">

          {{ Form::label('title', 'Tila:') }}
          {{ Form::text('title', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('comments', 'Kommentit:') }}
          {{ Form::textarea('comments', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::submit('Muuta', ['class' => 'btn btn-primary']) }}

        </div>




      {{ Form::close() }}



    </div>



    <div class='col-md-12'>

      <h1>Tilahistoria</h1>

      @include('translations.partials.statuses')

    </div>


  </div>

@stop



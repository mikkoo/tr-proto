
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Lähetä käännettävä tiedosto</h1>


      @include('layouts.partials.errors')


      {{ Form::open(['route' => 'translation_path', 'files' => 'true']) }}

        <div class="form-group">

          {{ Form::label('title', 'Title:') }}
          {{ Form::text('title', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('body', 'Body:') }}
          {{ Form::textarea('body', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('thumbnail', 'Thumbnail:') }}
          {{ Form::file('thumbnail') }}

        </div>


        <div class="form-group">

          {{ Form::submit('Lähetä', ['class' => 'btn btn-primary']) }}

        </div>




      {{ Form::close() }}


    </div>


  </div>

@stop




@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Lähetä käännös</h1>

      <p>Liitä käännettävät dokumentit tähän</p>


      @include('layouts.partials.errors')


      {{ Form::open(['route' => 'translation_create', 'files' => 'true']) }}

        <div class="form-group">

          {{ Form::label('title', 'Otsikko:') }}
          {{ Form::text('title', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('description', 'Kuvaus:') }}
          {{ Form::textarea('description', null, ['class' => 'form-control']) }}

        </div>


        <div class="form-group">

          {{ Form::label('filename', 'Liitetiedosto:') }}
          {{ Form::file('filename') }}

        </div>


        <div class="form-group">

          {{ Form::submit('Lähetä', ['class' => 'btn btn-primary']) }}

        </div>




      {{ Form::close() }}


    </div>


  </div>

@stop



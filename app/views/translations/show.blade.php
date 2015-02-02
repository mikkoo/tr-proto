
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Käännöksen tiedot</h1>


      <table class='table table-striped table-hover'>

        <thead>

        </thead>


        <tbody>

          <tr><td>Käyttäjä:</td>                    <td>{{ $translation->user_id }}</td></tr>
          <tr><td>Otsikko:</td>                     <td>{{ $translation->title }}</td></tr>
          <tr><td>Kuvaus:</td>                      <td>{{ $translation->description }}</td></tr>
          <tr><td>Tiedosto:</td>                    <td>{{ link_to_route('translation_download', $translation->filename, $translation->id, ['class' => '']) }}</td></tr>
          <tr><td>Luotu:</td>                       <td>{{ $translation->created_at }}</td></tr>
          <tr><td>Tietoja päivitetty viimeksi:</td> <td>{{ $translation->updated_at }}</td></tr>


        </tbody>

      </table>


      <h1>Käännöksen tilat</h1>


      @include('translations.partials.statuses')


    </div>


  </div>

@stop



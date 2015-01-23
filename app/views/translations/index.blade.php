
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">


      <h1>Käännökset</h1>

      <p>
        {{ link_to_route('translation_create', 'Lähetä käännös', null, ['class' => 'btn btn-primary']) }}
      </p>

      <hr />


      <h2>Käännösten tilat</h2>

      <p>Tilat: Lähetetty | Käännettävänä | Valmis</p>

      <table class="table table-striped table-hover">

        <thead>

          <tr>
            <th>#</th>
            <th>Luotu</th>
            <th>Käyttäjä</th>
            <th>Otsikko</th>
            <th>Kuvaus</th>
            <th>Tiedosto</th>
            <th>Tila</th>
          </tr>

        </thead>

        <tbody>

          @foreach($translations as $translation)

            <tr>

              <td>{{ $translation->id }}</td>
              <td>{{ $translation->created_at->diffForHumans() }}</td>
              <td>{{ $translation->user_id }}</td>
              <td>{{ $translation->title }}</td>
              <td>{{ $translation->description }}</td>
              <td>{{ $translation->filename }}</td>
              <td>Tila{{-- $translation->status --}}</td>
              
            </tr>

          @endforeach

        </tbody>

      </table>




    </div>


  </div>

@stop



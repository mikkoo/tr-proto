
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">


      <h1>Käännökset</h1>

      <hr />

      <p>
        {{ link_to_route('translation_create', 'Lähetä käännös', null, ['class' => 'btn btn-primary']) }}
      </p>

      <hr />


      <h2>Lähetetyt käännökset</h2>

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
            <th>Toiminnot</th>
          </tr>

        </thead>

        <tbody>

          @foreach($translations as $translation)

            <tr>

              <td>{{ $translation->id }}</td>
              <td>{{ $translation->created_at->diffForHumans() }}</td>
              <td>{{ $translation->user->username }}</td>
              <td>{{ $translation->title }}</td>
              <td>{{ $translation->description }}</td>
              <td>{{ $translation->filename }}</td>
              
              <td>{{ $translation->statuses->last()->title }}</td>

              <td>
                {{--<span class="glyphicon glyphicon-file" aria-hidden="true"></span>--}}
                {{ link_to_route('translation_show', 'Näytä', ['id' => $translation->id], ['class' => '']) }}
                /
                {{--<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>--}}
                {{ link_to_route('translation_edit', 'Muokkaa', ['id' => $translation->id], ['class' => '']) }}

              </td>
              
            </tr>

          @endforeach

        </tbody>

      </table>




    </div>


  </div>

@stop



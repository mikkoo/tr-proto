
@extends('layouts.default')


@section('content')


  <div class="row">

    <div class="col-md-12">

      <h1>Omat tiedot</h1>


      <table class='table'>

        <tbody>

          <tr><td>Käyttäjätunnus:</td>              <td>{{ $user->username }}</td></tr>
          <tr><td>Sähköposti:</td>                  <td>{{ $user->email }}</td></tr>
          <tr><td>Luotu:</td>                       <td>{{ $user->created_at }}</td></tr>
          <tr><td>Tietoja päivitetty viimeksi:</td> <td>{{ $user->updated_at }}</td></tr>


        </tbody>

      </table>




      <p>

        {{ link_to_route('change_password_path', 'Vaihda salasana', null, ['class' => 'btn btn-primary']) }}

      </p>






    </div>


  </div>

@stop



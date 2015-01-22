
@extends('layouts.default')


@section('content')


  <div class='jumbotron'>

    <h1>Käännösdemo</h1>

    <p>Ominaisuudet:</p>

    <ul>

      <li>Käyttäjä voi rekisteröityä</li>
      <li>Rekisteröitynyt käyttäjä voi kirjautua sisään ja ulos</li>

    </ul>

    <p>TODO:</p>


    <ul>

      <li>Käyttäjä voi lähettää tarjouspyynnön</li>
      <li>Käyttäjä voi seurata tarjouspyynnön tilaa</li>

    </ul>

  </div>


  <p>

    {{ link_to_route('request_path', 'Lähetä tarjouspyyntö', null, ['class' => 'btn btn-lg btn-primary']) }}

  </p>



@stop






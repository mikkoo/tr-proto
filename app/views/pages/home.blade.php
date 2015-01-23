
@extends('layouts.default')


@section('content')


  <div class='jumbotron'>

    <h1>Käännösproto</h1>

    <p>Ominaisuudet:</p>

    <ul>

      <li>Käyttäjä voi rekisteröityä</li>
      <li>Rekisteröitynyt käyttäjä voi kirjautua sisään ja ulos</li>

    </ul>

    <p>TODO:</p>


    <ul>

      <li>Sisäänkirjautunut käyttäjä voi lähettää käännöstyön</li>
      <li>Käyttäjä voi seurata käännöstyön tilaa</li>
      <li>Sisäänkirjautunut kääntäjä näkee käännöstyön, voi ladata tiedostot ja vaihtaa käännöstyön tilaa</li>

    </ul>


    <ul>


    </ul>




  </div>


  <p>

    {{ link_to_route('request_path', 'Lähetä tarjouspyyntö', null, ['class' => 'btn btn-lg btn-primary']) }}

  </p>



  <div>


    <h2>Termit</h2>

    <p>

      Customer - asiakas
      <br />Translator - kääntäjä
      <br />Translation - käännöstyö
      <br />Quote - Tarjouspyyntö

    </p>


    <h2>Kokonaisuudet</h2>

    <p>

      Translation - Yksittäinen käännöstyö
      <br />Document - Yksittäinen käännöstyöhön liittyvä dokumentti, jonka asiakas on lähettänyt. Näitä voi liittyä useampi käännöstyöhön.
      <br />State - Käännöksen tila (Lähetetty|Vastaanotettu|Valmis)

    </p>


  </div>





@stop







@extends('layouts.default')


@section('content')

  <div class='jumbotron'>

    <h1>LARB</h1>

    <p class='lead'>Laravel set up with Authentication, Registration and twitter Bootstrap</p>

    <p>This can be a starting point to build any Laravel web application.</p>

    <p>Features:</p>

    <ul>

      <li>Styling with twitter bootstrap (Sass running with Gulp)</li>
      <li>User can register to the system</li>
      <li>Registered user can log in or log out</li>

    </ul>

    <p>TODO:</p>


    <ul>

      <li>Confirmation by email</li>
      <li>Password reset by email</li>
      <li>Testing set up and testcases</li>

    </ul>




  </div>

  <p>

    {{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary']) }}

  </p>







@stop






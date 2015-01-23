<?php

class SessionsController extends \BaseController {


  // shows the login form
  public function create() {

    return View::make('sessions.create');

  }




  public function store() {

    $rules = ['email' => 'required', 'password' => 'required'];

    $data = Input::only('email', 'password');

    $validator = Validator::make($data, $rules);



    if ($validator->fails()) {

      return Redirect::back()->withInput()->withErrors($validator);

    }

 
    if (Auth::attempt($data)) {

      return Redirect::home()->with('success', 'Sisäänkirjautuminen onnistui!');

    } else {

      return Redirect::back()->withInput()->with('danger', 'Virhe sisäänkirjautumisessa!');
    }

   
  }



  public function destroy($id = null) {

    Auth::logout();

    return Redirect::home()->with('info', 'Kirjauduit ulos.');

  }

}

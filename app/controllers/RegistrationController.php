<?php

class RegistrationController extends \BaseController {


	// show a form to register a user
	public function create() {

		return View::make('registration.create');

	}




  // validates the form inputs and saves user
	public function store() {


    $rules = ['username' => 'required|unique:users', 'email' => 'required|email|unique:users', 'password' => 'required|confirmed'];

		$validator = Validator::make(Input::only('username', 'email', 'password', 'password_confirmation'), $rules);


    // larabookissa tää oli rakennettu hirveen hienoksi tää validointi systeemi, tässä vähän karvalakkiversio

    if ($validator->passes()) {

      $data = Input::only('username', 'email', 'password');

      $data['password'] = Hash::make($data['password']);


      $user = User::create($data);


  		Auth::login($user);

  		return Redirect::home()->with('success', 'New user registered!');



    } else {

      return Redirect::back()->withInput()->withErrors($validator);

    }



	}





}

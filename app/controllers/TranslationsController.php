<?php

use Lingoneer\Translations\Translation;
use Lingoneer\Statuses\Status;


class TranslationsController extends \BaseController {



  public function index() {

    $user_id = Auth::id();

    $user = User::where('id', $user_id)->first();

    $translations = $user->translations;


    // $latest = Translation::find('21')->statuses()->first()->title;

    //   return Translation::find('21');

    //return $translations;


    //$latest = $translations->statuses(); //->first()->title;

    //return $latest; //->first()->title;

    return View::make('translations.index', ['translations' => $translations]);

  }




  // näyttää tietyn käännöksen
  public function show($id)
  {

    // hakee tietyn käyttäjän käännökset joten ei tarvi erikseen tarkastaa onko käyttäjällä oikeus lukea käännöstä

    $user = User::where('id', Auth::id())->first();

    $translation = $user->translations->find($id);


   // dd($translation->statuses);




    //$translation = Translation::where('id', $id)->first();

    return View::make('translations.show', ['translation' => $translation]);

  }







  // näyttää käännösten syöttö formin
  public function create() {

    return View::make('translations.create');

  }


  // tallentaa formin
  public function store() {

    // validation here

    $tr = new Translation;

    $tr->user_id = Auth::id();

    $tr->title = Input::get('title');
    $tr->description = Input::get('description');


    if (Input::hasFile('filename')) {

      $file = Input::file('filename');

      //$file->move(public_path() . '/uploads/', 'filunki.png');

      /*return [

        'path' => $file->getRealPath(),
        'size' => $file->getSize(),
        'mime' => $file->getMimeType(),        
        'name' => $file->getClientOriginalName(),
        'extension' => $file->getClientOriginalExtension(),

      ];*/

/*
      try {
      } catch FileException
*/

      $filename = time() . '-' . $file->getClientOriginalName();

      $saved_file = $file->move(public_path() . '/uploads/', $filename);

      $tr->filename = $filename;

    }


    $translation_saved = $tr->save();


    // luo ekan statuksen saman tien

    $status = new Status(['title' => 'Lähetetty', 'comments' => 'Käyttäjä lähetti käännöksen']);

    $status = $tr->statuses()->save($status);



    if ($translation_saved) {

      return Redirect::to('translations')->with('success', 'Käännös lähetetty!');

    } else {

      return Redirect::back()->withInput()->with('danger', 'Virhe käännöksen lähetyksessä!');
    }

  }



  // shows the edit form
  public function edit($id) {


    $user = User::where('id', Auth::id())->first();

    $translation = $user->translations->find($id);


    return View::make('translations.edit', ['translation' => $translation]);

  }



  // creates a new state for given translation
  public function update($translation_id) {

    $user = User::where('id', Auth::id())->first();

    $translation = $user->translations->find($translation_id);

    $status = new Status();
    $status->title = Input::get('title');
    $status->comments = Input::get('comments');

    $status = $translation->statuses()->save($status);

    if ($status) {

      return Redirect::to('translations/' . $translation_id . '/edit')->with('success', 'Tila päivitetty!');

    } else {

      return Redirect::back()->withInput()->with('danger', 'Virhe tilan päivityksessä!');
    }

  }




}


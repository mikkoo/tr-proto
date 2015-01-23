<?php

use Lingoneer\Translations\Translation;



class TranslationsController extends \BaseController {



  public function index() {

    //$user_id = Auth::id();

    $translations = Translation::where('user_id', '=', Auth::id())->get();
    

 //   dd($translations);

    //all()->with();
    //$statuses()->with('user')->latest()->get();


    return View::make('translations.index', ['translations' => $translations]);

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

      $saved_file = $file->move(public_path() . '/uploads/', time() . '-' . $file->getClientOriginalName());

      //dd($saved_file);


      $tr->filename = $saved_file->getRealPath();

    }


    $tr->save();

    return 'done';

    //dd(Input::file('thumbnail'));

    // saves request to db
  }


}


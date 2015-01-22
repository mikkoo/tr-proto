<?php

use Lingoneer\Requests\Request;



class RequestsController extends \BaseController {


  // Tarjouspyyntölomake
  // shows the request form
  public function create() {

    return View::make('requests.create');

  }


  public function me() {

    $test = new Request;

    return $test->testing();

  }



  public function store() {

    // validation here

    $rq = new Request;

    $rq->title = Input::get('title');
    $rq->body = Input::get('body');


    if (Input::hasFile('thumbnail')) {

      $file = Input::file('thumbnail');

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


      $rq->thumbnail = $saved_file->getRealPath();

    }


    $rq->save();

    return 'done';

    //dd(Input::file('thumbnail'));

    // saves request to db
  }


}


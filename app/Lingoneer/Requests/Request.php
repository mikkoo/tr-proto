<?php namespace Lingoneer\Requests;


class Request extends \Eloquent {

  protected $fillable = ['title', 'body', 'thumbnail'];


  public function testing() {


    return 'olen request modeli';

  }









}

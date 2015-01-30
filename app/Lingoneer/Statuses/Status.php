<?php namespace Lingoneer\Statuses;



class Status extends \Eloquent {

  protected $fillable = ['translation_id', 'title', 'comments'];


  // relationship
  public function translation() {

    return $this->belongsTo('Lingoneer\Translation\Translation');

  }








}

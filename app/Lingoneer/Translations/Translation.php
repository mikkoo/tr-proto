<?php namespace Lingoneer\Translations;



class Translation extends \Eloquent {

  protected $fillable = ['user_id', 'title', 'description', 'filename'];


  // relationship
  public function user() {

    return $this->belongsTo('User');

  }


  // relationship
  public function statuses() {

    return $this->hasMany('Lingoneer\Statuses\Status');

  }


  // latest status helper relation (to not to load too many from db)
  public function latest_status() {

    return $this->hasOne('Lingoneer\Statuses\Status')->latest();

  }




}

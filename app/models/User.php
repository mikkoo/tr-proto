<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Lingoneer\Translations\Translation;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	// which fields can be filled from inputs
	protected $fillable = ['username', 'email', 'password'];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');



	public function roles() {

		return $this->belongsToMany('Role');

	}


	// if user has the particular given role
	public function hasRole($name) {

		foreach ($this->roles as $role) {

			if ($role->name == $name) return true;

		}

		return false;

	}


	// give a role to the user
	public function assignRole($role) {

		return $this->roles()->attach($role);

	}

	// remove a role from the user
	public function removeRole($role) {

		return $this->roles()->detach($role);

	}




	// relationship
	public function translations() {

		return $this->hasMany('Lingoneer\Translations\Translation');

	}



	public function testme() {
		return 'i am user';
	}


}

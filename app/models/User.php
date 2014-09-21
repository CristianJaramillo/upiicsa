<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * The attibutes from the method create.
	 *
	 * @var array
	 */
	protected $fillable = ['full_name', 'email', 'team', 'sex', 'question-1', 'category_id', 'question-2', 'question-3', 'question-4', 'question-5', 'question-6', 'question-7', 'question-8', 'question-9', 'question-10'];

	/**
	 *
	 * return Eloquent
	 */
	public function category()
    {
    	return $this->belongsTo('Category');
    }

}

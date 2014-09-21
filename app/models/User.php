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
	protected $fillable = ['full_name', 'email', 'team', 'sex', 'category_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'question_7', 'question_8', 'question_9', 'question_10'];

	/**
	 *
	 * return Eloquent
	 */
	public function category()
    {
    	return $this->belongsTo('Category');
    }

    /**
	 * return utf8_encode name.
	 *
	 * @var string
	 * @return $value
	 */
	public function getQuestion1Attribute($value)
    {
        return utf8_encode($this->attributes['question_1']);
    }

    /**
	 * The The decode to utf8..
	 *
	 * @var string 
	 */
	public function setQuestion1Attribute($value)
    {
        if (!empty($value))
        {
            $this->attributes['question_1'] = utf8_decode($value);
        }
    }

    /**
	 * return utf8_encode name.
	 *
	 * @var string
	 * @return $value
	 */
	public function getQuestion5Attribute($value)
    {
        return utf8_encode($this->attributes['question_5']);
    }

    /**
	 * The The decode to utf8..
	 *
	 * @var string 
	 */
	public function setQuestion5Attribute($value)
    {
        if (!empty($value))
        {
            $this->attributes['question_5'] = utf8_decode($value);
        }
    }

}

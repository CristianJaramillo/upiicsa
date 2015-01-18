<?php namespace UPIICSA\Entities;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attibutes from the method create.
	 *
	 * @var array
	 */
	protected $fillable = ['full_name', 'email', 'team_id', 'sex', 'category_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'question_7', 'question_8', 'question_9', 'question_10'];

	/**
	 * The attributes defining guarded
	 *
	 * @var array
	 */	
	protected $guarded = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	/**
	 *
	 * return Eloquent
	 */
	public function category()
    {
    	return $this->hasOne('UPIICSA\Entities\Category', 'id', 'category_id');
    }

    /**
	 * return encode to utf8 full_name.
	 *
	 * @var string 
	 */
	public function getFullNameAttribute($value)
    {
        return utf8_encode($this->attributes['full_name']);
    }

	/**
	 * The decode to utf8 full_name.
	 *
	 * @var string 
	 */
	public function setFullNameAttribute($value)
    {
        if (!empty($value))
        {
            $this->attributes['full_name'] = utf8_decode($value);
        }
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

    /**
     * @return
     */
    public function scopeWithAll($query)
    {
    	return $query->with('category')->get();
    }

}

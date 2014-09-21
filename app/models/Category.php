<?php

class Category extends \Eloquent {
	
	protected $fillable = [];

	/**
	 * @return \Eloquent
	 */
	public function users()
    {
        return $this->hasMany('User');
    }

	/**
	 * return utf8_encode name.
	 *
	 * @var string
	 * @return $value
	 */
	public function getNameAttribute($value)
    {
        return utf8_encode($this->attributes['name']);
    }

	/**
	 * The The decode to utf8..
	 *
	 * @var string 
	 */
	public function setNameAttribute($value)
    {
        if (!empty($value))
        {
            $this->attributes['name'] = utf8_decode($value);
        }
    }



}
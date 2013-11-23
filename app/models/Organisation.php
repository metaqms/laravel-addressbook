<?php

class Organisation extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'organisation_name' => 'required',
		'organisation_web' => 'required'
	);

	public function contact ()
        {
                return $this-hasMany('Contact');
        }
}

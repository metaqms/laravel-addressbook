<?php

class Contact extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'email' => 'required',
		'organisation_id' => 'required',
		'home_address_id' => 'required',
		'work_address_id' => 'required',
		'blog-url' => 'required',
		'twitter' => 'required',
		'facebook' => 'required',
		'work_phone' => 'required',
		'home_phone' => 'required',
		'personal_phone' => 'required',
		'status' => 'required'
	);
}

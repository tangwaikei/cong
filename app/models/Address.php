<?php

class Address extends \Eloquent {
	protected $fillable = array(
			'username',
			'province',
			'city',
			'country',
			'postcode',
			'mobile',
			'address',
			'is_default',
			'user_id'
		);

	protected $hidden = array(
			'created_at',
			'updated_at'
		);
}
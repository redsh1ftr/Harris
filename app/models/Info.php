<?php

class Info extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'name',
			'image_1',
			'image_2',
	];

	protected $table = 'infos';

}
<?php

class Casket extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
			'name',
			'interior',
			'material',
			'manufacturer',
			'group',
			'price',
			'cost',
			'notes',
			'panel',
			'vault_size',
			'image_1',
			'image_2',
			'image_3',
	];

	protected $table = 'caskets';

}
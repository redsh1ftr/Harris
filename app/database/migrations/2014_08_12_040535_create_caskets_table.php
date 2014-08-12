<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caskets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('interior');
			$table->string('material');
			$table->string('manufacturer');
			$table->integer('group');
			$table->integer('price');
			$table->integer('cost');
			$table->text('notes');
			$table->string('panel');
			$table->string('vault_size');
			$table->string('image_1');
			$table->string('image_2');
			$table->string('image_3');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caskets');
	}

}

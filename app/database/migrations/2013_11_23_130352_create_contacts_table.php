<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->integer('organisation_id');
			$table->integer('home_address_id');
			$table->integer('work_address_id');
			$table->string('blog-url');
			$table->string('twitter');
			$table->string('facebook');
			$table->string('work_phone');
			$table->string('home_phone');
			$table->string('personal_phone');
			$table->boolean('status');
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
		Schema::drop('contacts');
	}

}

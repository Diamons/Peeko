<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('stores');
		Schema::create('stores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('latitude');
			$table->double('longitude');
			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->double('zipcode');
			$table->string('icon');
			$table->string('menu');
			$table->string('phone');
			$table->string('website');
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
		Schema::drop('stores');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('users');
		Schema::create('users', function(Blueprint $table)
		{
			//
			//$this->down();
			
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('remember_token')->nullable();
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
		/*
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
		*/
		Schema::drop('users');
	}

}

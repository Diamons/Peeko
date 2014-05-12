<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPromotions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('promotions');
		//Create promotions_id and promotions table
		Schema::create('promotions', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('image');
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->string('description')->nullable();
			$table->integer('store_id')->unsigned();
			$table->foreign('store_id')->references('id')->on('stores');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Undo everything in this schema

		Schema::drop('promotions');
		Schema::table('shops', function(Blueprint $table){
			$table->dropColumn('promotion_id');
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
 			$table->increments('id');
 			$table->string('username');
 			$table->string('password');
 			$table->timestamps();
		});
		Schema::create('customer',function($table)
		{
 			$table->increments('id');
 			$table->string('firstname');
 			$table->string('lastname');
 			$table->string('email');
 			$table->string('adress');
 			$table->string('zip_code');
 			$table->string('phonenumber');
 			$table->timestamps();
		});
		Schema::create('bookings',function($table)
		{
 			$table->increments('id');
 			$table->integer('stug_id');
 			$table->integer('customer_id');
 			$table->date('booking_from');
 			$table->date('booking_to');
 			$table->timestamps();
		});
		Schema::create('houses',function($table)
		{
 			$table->increments('id');
 			$table->string('name');
 			$table->string('beds');
 			$table->timestamps();
		});
		Schema::create('notes',function($table)
		{
 			$table->increments('id');
 			$table->string('title');
 			$table->string('content');
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
		Schema::drop('users');
		Schema::drop('customer');
		Schema::drop('bookings');
		Schema::drop('stugor');
	}

}
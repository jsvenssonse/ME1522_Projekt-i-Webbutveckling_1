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
 			$table->integer('booking_id');
 			$table->string('name');
 			$table->string('email');
 			$table->string('phonenumber');
 			$table->timestamps();
		});
		Schema::create('bookings',function($table)
		{
 			$table->increments('id');
 			$table->integer('week_id');
 			$table->integer('house_id');
 			$table->date('datefrom');
 			$table->date('dateto');
 			$table->timestamps();
		});
		Schema::create('houses',function($table)
		{
 			$table->increments('id');
 			$table->string('name');
 			$table->string('spec');
 			$table->timestamps();
		});
		Schema::create('week',function($table)
		{
 			$table->increments('id');
 			$table->integer('weeknr');
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
		Schema::drop('houses');
		Schema::drop('week');
	}

}
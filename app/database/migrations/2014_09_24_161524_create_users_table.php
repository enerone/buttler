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
		Schema::create('users', function(Blueprint $table)
    	{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('email')->unique();
			$table->date('fecnac');
			$table->enum('estado', array('activo','inactivo'));
			$table->integer('gmt');
			$table->string('avatar');
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
	}

}

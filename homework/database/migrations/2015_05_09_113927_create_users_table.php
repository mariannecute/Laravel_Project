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
		//

		Schema::create('users', function(Blueprint $table)
		{
			$table->string('username')->unique();
			$table->string('password');
			$table->string('firstname');
			$table->string('lastname');
			$table->int('age');
			$table->date('birthdate');
			$table->string('student_num');
			$table->string('org_batch');
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
		//
		Schema::drop('users');
	}

}

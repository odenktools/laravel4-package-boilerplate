<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('odk_users', function(Blueprint $table)
		{
			$table->increments('id_user');
			$table->string('username', 128)->unique();
			$table->string('user_mail', 128)->unique();
			$table->string('passwd', 128);
			$table->string('activation_code', 40)->nullable();
			$table->integer('is_builtin')->default(0);
			$table->integer('is_active')->default(0);
			$table->dateTime('expire_date')->nullable();
			$table->string('time_zone', 128)->nullable();
			$table->timestamp('last_login');
			$table->string('forgotten_password_code', 40)->nullable();
			$table->integer('forgotten_password_time')->nullable();
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

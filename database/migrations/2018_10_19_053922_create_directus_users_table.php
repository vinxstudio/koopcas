<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('status')->nullable()->default(1);
			$table->string('first_name', 50)->nullable()->default('');
			$table->string('last_name', 50)->nullable()->default('');
			$table->string('email', 128)->default('')->unique();
			$table->string('password')->nullable()->default('');
			$table->string('salt')->nullable()->default('');
			$table->string('token', 128)->nullable()->unique();
			$table->string('access_token')->nullable()->default('');
			$table->string('reset_token')->nullable()->default('');
			$table->dateTime('reset_expiration')->nullable();
			$table->string('position', 500)->nullable()->default('');
			$table->boolean('email_messages')->nullable()->default(1);
			$table->dateTime('last_login')->nullable();
			$table->dateTime('last_access')->nullable();
			$table->string('last_page')->nullable()->default('');
			$table->string('ip', 50)->nullable()->default('');
			$table->integer('group')->unsigned()->nullable();
			$table->string('avatar', 500)->nullable();
			$table->integer('avatar_file_id')->unsigned()->nullable();
			$table->string('location')->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('state', 2)->nullable();
			$table->char('country', 2)->nullable();
			$table->string('zip', 10)->nullable();
			$table->string('language', 8)->nullable()->default('en');
			$table->string('timezone', 32)->nullable()->default('America/New_York');
			$table->string('invite_token')->nullable();
			$table->dateTime('invite_date')->nullable();
			$table->integer('invite_sender')->unsigned()->nullable();
			$table->boolean('invite_accepted')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_users');
	}

}

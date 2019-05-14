<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectusGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directus_groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->nullable()->unique('directus_users_name_unique');
			$table->string('description', 500)->nullable();
			$table->text('restrict_to_ip_whitelist', 65535)->nullable();
			$table->text('nav_override', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('directus_groups');
	}

}
